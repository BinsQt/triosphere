<?php
  // include("./backend/connection.php");

  // $select = "SELECT * FROM mq9 ";

?>

<div class="sm:container sm:mb-10 font-primary">
  
    <?php 
    include('partials/header.php')
    ?>
  
  <div id="animateMe" class="w-full opacity-0 transition-opacity duration-500 backdrop-blur z-20">
    <?php include('./backend/weatherapi.php') ?>
      <div class="p-5">
        <div class="rounded-xl border p-2 shadow-xl flex flex-col gap-10 bg-white text-black bg-opacity-30">
          <div class="flex flex-row justify-between items-center">
            <div class="flex items-center"><span class="material-symbols-outlined">location_on</span>
            <span class="text-6xl"><?php echo $data->name; ?></span></div>
            <div class="mr-5">
              <div><span class="text-2xl"><?php echo date("l", $currentTime); ?></span></div>
              <div><span class="text-2xl"><?php echo date("g:i a", $currentTime); ?></span></div>
            </div>
          </div>
          <div class="flex justify-between items-center">
            <div>
              <div class="flex items-center">
                <div class="flex flex-start"><span class="text-7xl"><?php $temp = $data->main->temp; $formattedNum = number_format($temp); echo $formattedNum;?></span><span class="text-3xl">°C</span></div>
              </div>
              <div class="flex">
                <img src="https://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="" /> 
                <div><span>feels like: </span><br><span><?php echo $data->main->feels_like; ?>°C</span></div>
              </div>

            </div>
            <div>
              <div><?php echo $data->weather[0]->main; ?></div>
              <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
              <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Air Quality Section -->
    <div id="animateMe"  class="px-3 flex-col flex gap-5 my-10 rounded-xl mx-2">
      <div class="text-md mx-auto w-full flex justify-between bg-black bg-opacity-50 px-3 rounded-xl py-2">
        <div class="flex items-center"><span class="material-symbols-outlined mx-1 text-green-600">temp_preferences_eco</span>AQI</div>
        <div><span class="text-gray-400 text-sm">Air Quality is good. A prefer day for a walk</span> </div>
      </div>

      <div class="gap-10 flex flex-col pb-10">
        <div class="flex justify-around items-center gap-5">
          <div id="animateMe" class="border bg-black bg-opacity-25 p-3 rounded-xl w-1/2">
            <div class="">
              <div class="">
                  <h1>
                    Carbon Dioxide
                  </h1>
                </div>


              <div class="flex justify-between items-center">
                <div class="">
                <img width="50" height="50" src="https://img.icons8.com/ios/50/co2.png" alt="co2"/>
                </div>
                <div>
                <span class="text-6xl">30<span class="text-sm">PPM</span></span>                 
                <?php 
                
                  // $result = mysqli_query($conn, $select);

                  // if ($result->num_rows > 0){
                                    
                                
                  //   while($row = mysqli_fetch_assoc($result)) {
                  //       $co = $row["co"];

                  //       echo $co ." ". "ppm";
                  //   }
                  // }
                ?>
                </div>


              </div>
            </div>
          </div>

          <div class="border bg-black bg-opacity-25 p-3 rounded-xl w-1/2">
            <div class="">
              <div class="">
                  <h1>
                    Carbon Monoxide
                  </h1>
                </div>


              <div class="flex justify-between items-center">
                <div class="">
                  <img width="50" height="50" src="https://img.icons8.com/ios/50/co2.png" alt="co2"/>
                </div>
                <div>
                <span class="text-6xl">30<span class="text-sm">PPM</span></span>                 
                <?php 
                
                  // $result = mysqli_query($conn, $select);

                  // if ($result->num_rows > 0){
                                    
                                
                  //   while($row = mysqli_fetch_assoc($result)) {
                  //       $co = $row["co"];

                  //       echo $co ." ". "ppm";
                  //   }
                  // }
                ?>
                </div>


              </div>
            </div>
          </div>


        </div>

        <div class="flex justify-around items-center gap-5">
          <div class="border bg-black bg-opacity-25 p-3 rounded-xl w-1/2">
            <div class="">
              <div class="">
                  <h1>
                    Carbon Dioxide
                  </h1>
                </div>


              <div class="flex justify-between items-center">
                <div class="">
                  <img width="50" height="50" src="https://img.icons8.com/ios/50/co2.png" alt="co2"/>
                </div>
                <div>
                <span class="text-6xl">30<span class="text-sm">PPM</span></span>                 
                <?php 
                
                  // $result = mysqli_query($conn, $select);

                  // if ($result->num_rows > 0){
                                    
                                
                  //   while($row = mysqli_fetch_assoc($result)) {
                  //       $co = $row["co"];

                  //       echo $co ." ". "ppm";
                  //   }
                  // }
                ?>
                </div>


              </div>
            </div>
          </div>

          <div class="border bg-black bg-opacity-25 p-3 rounded-xl w-1/2">
            <div class="">
              <div class="">
                  <h1>
                    Carbon Monoxide
                  </h1>
                </div>


              <div class="flex justify-between items-center">
                <div class="">
                  <img width="50" height="50" src="https://img.icons8.com/ios/50/co2.png" alt="co2"/>
                </div>
                <div>
                <span class="text-6xl">30<span class="text-sm">PPM</span></span>                 
                <?php 
                
                  // $result = mysqli_query($conn, $select);

                  // if ($result->num_rows > 0){
                                    
                                
                  //   while($row = mysqli_fetch_assoc($result)) {
                  //       $co = $row["co"];

                  //       echo $co ." ". "ppm";
                  //   }
                  // }
                ?>
                </div>


              </div>
            </div>
          </div>


        </div>

        <div class="flex justify-around items-center gap-5">
          <div class="border bg-black bg-opacity-25 p-3 rounded-xl w-1/2">
            <div class="">
              <div class="">
                  <h1>
                    Carbon Dioxide
                  </h1>
                </div>


              <div class="flex justify-between items-center">
                <div class="">
                  <img width="50" height="50" src="https://img.icons8.com/ios/50/co2.png" alt="co2"/>
                </div>
                <div>
                <span class="text-6xl">30<span class="text-sm">PPM</span></span>                 
                <?php 
                
                  // $result = mysqli_query($conn, $select);

                  // if ($result->num_rows > 0){
                                    
                                
                  //   while($row = mysqli_fetch_assoc($result)) {
                  //       $co = $row["co"];

                  //       echo $co ." ". "ppm";
                  //   }
                  // }
                ?>
                </div>


              </div>
            </div>
          </div>

          <div class="border bg-black bg-opacity-25 p-3 rounded-xl w-1/2">
            <div class="">
              <div class="">
                  <h1>
                    Carbon Monoxide
                  </h1>
                </div>


              <div class="flex justify-between items-center">
                <div class="">
                  <img width="50" height="50" src="https://img.icons8.com/ios/50/co2.png" alt="co2"/>
                </div>
                <div>
                <span class="text-6xl">30<span class="text-sm">PPM</span></span>                 
                <?php 
                
                  // $result = mysqli_query($conn, $select);

                  // if ($result->num_rows > 0){
                                    
                                
                  //   while($row = mysqli_fetch_assoc($result)) {
                  //       $co = $row["co"];

                  //       echo $co ." ". "ppm";
                  //   }
                  // }
                ?>
                </div>


              </div>
            </div>
          </div>


        </div>

      </div>

    </div>
</div>
