<?php 
    include("connection.php");

    $carbon_monoxide = $_GET["CO"];
    $lpg = $_GET["lpg"];
    $methane = $_GET["methane"];
    $ammonia = $_GET["ammonia"];
    $carbon_dioxide = $_GET["co2"];
    $device_id = $_GET["deviceId"];

    $select = "SELECT deviceId from mq9";

    $result = mysqli_query($conn, $select);

if ( mysqli_num_rows ( $result ) >= 1 ) {
    $ud = "UPDATE mq9 SET co = '$carbon_monoxide', lpg = '$lpg', methane= '$methane', ammonia= '$ammonia', co2 = '$carbon_dioxide' WHERE deviceId = 1234";
    if ($conn->query($ud) === TRUE) {
        echo "Updated!!";
        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }
} else {
            $sql = "INSERT INTO mq9 (co, lpg, methane, deviceId, ammonia, co2)
            VALUES ('$carbon_monoxide', '$lpg', '$methane' , '$device_id', '$ammonia', '$carbon_dioxide') WHERE deviceID = 1234";
        
                if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
                } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }
}

?>