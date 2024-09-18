//Include the library
#include <MQUnifiedsensor.h>

// WiFi & HTTP
#include <Arduino.h>
#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <WiFiClient.h>
/************************Hardware Related Macros************************************/
#define         Board                   ("ESP8266")
#define         Pin                     (A0)  //Analog input 3 of your arduino
/***********************Software Related Macros************************************/
#define         Type                    ("MQ-9") //MQ3
#define         Voltage_Resolution      (5) // 3V3 <- IMPORTANT
#define         ADC_Bit_Resolution      (10) // For ESP8266
#define         RatioMQ9CleanAir        (9.6)
/*****************************Globals***********************************************/
MQUnifiedsensor MQ9(Board, Voltage_Resolution, ADC_Bit_Resolution, Pin, Type);
float LPG;
float CH4;
float CO;
const char* message;
int deviceId = 1234;


/*****************************WiFi Credentials***********************************************/
#ifndef STASSID
#define STASSID "Cc0bB2-g"
#define STAPSK "277665207"
#endif
const char* ssid = STASSID;
const char* password = STAPSK;
 
const unsigned long SEND_TIME = 5000;

char url[196] = "";
/*****************************WiFi Credentials***********************************************/

void setup() {
  //Init the serial port communication - to debug the library
  Serial.begin(115200); //Init serial port

  setupWiFi();
 //Set math model to calculate the PPM concentration and the value of constants
  MQ9.setRegressionMethod(1); //_PPM =  a*ratio^b
 
  MQ9.init(); 

  Serial.print("Calibrating please wait.");
  float calcR0 = 0;
  for(int i = 1; i<=10; i ++)
  {
    MQ9.update(); // Update data, the arduino will read the voltage from the analog pin
    calcR0 += MQ9.calibrate(RatioMQ9CleanAir);
    Serial.print(".");
  }
  MQ9.setR0(calcR0/10);
  Serial.println("  done!.");
  
  if(isinf(calcR0)) {Serial.println("Warning: Conection issue, R0 is infinite (Open circuit detected) please check your wiring and supply"); while(1);}
  if(calcR0 == 0){Serial.println("Warning: Conection issue found, R0 is zero (Analog pin shorts to ground) please check your wiring and supply"); while(1);}
  /*****************************  MQ CAlibration ********************************************/ 
  Serial.println("** Values from MQ-9 ****");
  Serial.println("|    LPG   |  CH4 |   CO  |");  
}

void loop() {
MQ9.update(); // Update data, the arduino will read the voltage from the analog pin
  /*
  Exponential regression:
  GAS     | a      | b
  LPG     | 1000.5 | -2.186
  CH4     | 4269.6 | -2.648
  CO      | 599.65 | -2.244
  */

  MQ9.setA(1000.5); MQ9.setB(-2.186); // Configure the equation to to calculate LPG concentration
  LPG = MQ9.readSensor(); // Sensor will read PPM concentration using the model, a and b values set previously or from the setup

  MQ9.setA(4269.6); MQ9.setB(-2.648); // Configure the equation to to calculate LPG concentration
  CH4 = MQ9.readSensor(); // Sensor will read PPM concentration using the model, a and b values set previously or from the setup

  MQ9.setA(599.65); MQ9.setB(-2.244); // Configure the equation to to calculate LPG concentration
  CO = MQ9.readSensor(); // Sensor will read PPM concentration using the model, a and b values set previously or from the setup

  Serial.print("|    "); Serial.print(LPG);
  Serial.print("    |    "); Serial.print(CH4);
  Serial.print("    |    "); Serial.print(CO); 
  Serial.println("    |");

  delay(500); //Sampling frequency

      static unsigned long sendToWebTime = 0;
    // Send Data to Web every 5 seconds
    if (millis() - sendToWebTime > SEND_TIME) {
      sendToWebTime = millis();
      sendDataToWeb();
    }


    if(LPG > 2000) {
      message = ("Warning: high LPG concentration detected please check LPG");
      {sendSMS(); while(1);}
    } else if (CH4 > 50000 ) {
      message = ("Warning: high METHANE concentration detected please avoid things thaat may ignite the gas");
      {sendSMS(); while(1);}
    } else if (CO > 70) {
      message = ("Warning: Medium level of CO detected. This might cause headache, fatigue and nausea please conside wearing a mask");
      {sendSMS(); while(1);}
    } else if (CO > 150 ) {
      message = ("Warning: High level of CO detected. This might cause a serious health issue please conside wearing a mask and consider to move to n area with cleaner air");
      {sendSMS(); while(1);}
    }
    
    
}

void setupWiFi() {
  Serial.print("Connecting to ");
  Serial.println(ssid);
 
  /* Explicitly set the ESP8266 to be a WiFi-client, otherwise, it by default,
     would try to act as both a client and an access-point and could cause
     network-issues with your other WiFi-devices on your WiFi-network. */
  WiFi.mode(WIFI_STA);
  WiFi.begin(ssid, password);
 
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  
 

  Serial.println("");
  Serial.println("WiFi connected");
  Serial.println("IP address: ");
  Serial.println(WiFi.localIP());
}

void sendDataToWeb() {
  WiFiClient client;
 
  HTTPClient http;
 
  Serial.print("[HTTP] begin...\n");
  sprintf(url, "http://air-qualitytriosphere.000webhostapp.com/backend/catch.php?CO=%.2f&lpg=%.2f&methane=%.2f&deviceId=%d", CO, LPG, CH4, deviceId);
  if (http.begin(client, url)) {  // HTTP
 
 
    Serial.print("[HTTP] GET...\n");
    // start connection and send HTTP header
    int httpCode = http.GET();
 
    // httpCode will be negative on error
    if (httpCode > 0) {
      // HTTP header has been send and Server response header has been handled
      Serial.printf("[HTTP] GET... code: %d\n", httpCode);
 
      // file found at server
      if (httpCode == HTTP_CODE_OK || httpCode == HTTP_CODE_MOVED_PERMANENTLY) {
        String payload = http.getString();
        Serial.println(payload);
      }
    } else {
      Serial.printf("[HTTP] GET... failed, error: %s\n", http.errorToString(httpCode).c_str());
    }
 
    http.end();
  } else {
    Serial.println("[HTTP] Unable to connect");
  }
}

void sendSMS()
{
  Serial.print("AT+CMGF=1\r");                     // AT command to send SMS message
  delay(200);
 Serial.println("AT + CMGS = \"+639185240232\"");  // recipient's mobile number, in international format
 
  delay(200);
  Serial.println(message);                         // message to send
  delay(200);
  Serial.println((char)26);                        // End AT command with a ^Z, ASCII code 26
  delay(200); 
  Serial.println();
  delay(100);                                     // give module time to send SMS

}