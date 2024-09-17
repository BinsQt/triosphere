<?php
  // include("./backend/connection.php");

  // $select = "SELECT * FROM mq9 ";

?>

<div class="sm:container mb-10">
  
    <?php 
    include('partials/header.php')
    ?>
  
  <div id="animateMe" class="w-full opacity-0 transition-opacity duration-500">
    <?php include('./backend/weatherapi.php') ?>
      <div class="p-5">
        <div class="rounded-xl border p-2 shadow-xl flex flex-col gap-10">
          <div class="flex flex-row justify-between">
            <div><span class="text-5xl"><?php echo $data->name; ?></span></div>
            <div>
              <div><span class="text-1xl"><?php echo date("l", $currentTime); ?></span></div>
              <div><span class="text-1xl"><?php echo date("g:i a", $currentTime); ?></span></div>
            </div>
          </div>
          <div class="flex justify-between">
            <div>
              <div class="flex items-center">
                <div class="flex flex-start"><span class="text-7xl"><?php $temp = $data->main->temp; $formattedNum = number_format($temp); echo $formattedNum;?></span><span class="text-3xl">°C</span></div>
                <img src="https://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="-translate-x-8 translate-y-4" /> 
              </div>
              <div>feels like: <?php echo $data->main->feels_like; ?>°C</div>
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
    <div class="px-3 flex-col flex gap-5 mt-10">
      <div class="text-6xl mx-auto">
        Air Quality
      </div>

      <div class="gap-10 flex flex-col">
        <div class="flex justify-evenly">
          <div class="border  rounded-xls w-36">
            <div class="">
              <div class="">
                <div class="">
                  <h1>
                    Carbon Dioxide
                  </h1>
                </div>
                <div class="">
                  <img width="50" height="50" src="https://img.icons8.com/ios/50/co2.png" alt="co2"/>
                </div>
              </div>
              <div class="">
                <h1>30</h1>
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

          <div class="border rounded-xls w-36">
            <div class="">
              <div class="">
                <div class="">
                  <h1>
                    Carbon Monoxide
                  </h1>
                </div>
                <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" height="50" viewBox="0 -960 960 960" width="50"><path d="M440-360q-17 0-28.5-11.5T400-400v-160q0-17 11.5-28.5T440-600h120q17 3 28.5 11.5T600-560v160q0 17-11.5 28.5T560-360H440Zm20-60h80v-120h-80v120Zm-300 60q-17 0-28.5-11.5T120-400v-160q0-17 11.5-28.5T160-600h120q17 0 28.5 11.5T320-560v40h-60v-20h-80v120h80v-20h60v40q0 17-11.5 28.5T280-360H160Zm520 28.5 11.5T860-440v60q0 17-11.5 28.5T820-340h-80v40h120v60H680Z"/></svg>
                </div>
              </div>
                <div class="">
                  <h1>30</h1>
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

        <div class="flex justify-evenly">
          <div class="border  rounded-xls w-36">
            <div class="">
              <div class="">
                <div class="">
                  <h1>
                    Methane
                  </h1>
                </div>
                <div class="">
                  <img width="50" height="50" src="https://img.icons8.com/ios/50/gas.png" alt="co2"/>
                </div>
              </div>
              <div class="">
                30
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

          <div class="border  rounded-xls w-36">
            <div class="">
              <div class="">
                <div class="">
                  <h1>
                    Ethane
                  </h1>
                </div>
                <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" height="50" viewBox="0 -960 960 960" width="50"><path d="M440-360q-17 0-28.5-11.5T400-400v-160q0-17 11.5-28.5T440-600h120q17 3 28.5 11.5T600-560v160q0 17-11.5 28.5T560-360H440Zm20-60h80v-120h-80v120Zm-300 60q-17 0-28.5-11.5T120-400v-160q0-17 11.5-28.5T160-600h120q17 0 28.5 11.5T320-560v40h-60v-20h-80v120h80v-20h60v40q0 17-11.5 28.5T280-360H160Zm520 28.5 11.5T860-440v60q0 17-11.5 28.5T820-340h-80v40h120v60H680Z"/></svg>
                </div>
              </div>
                <div class="">
                  30
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

        <div class="flex justify-evenly">
          <div class="border rounded-xls w-36">
            <div class="">
              <div class="">
                <div class="">
                  <h1>
                    Ammonia
                  </h1>
                </div>
                <div class="">
                  <img width="50" height="50" src="https://img.icons8.com/ios/50/co2.png" alt="co2"/>
                </div>
              </div>
              <div class="">
                30
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

          <div class="border rounded-xls w-36">
            <div class="">
              <div class="">
                <div class="">
                  <h1>
                    Alcohol
                  </h1>
                </div>
                <div class="">
                <svg xmlns="http://www.w3.org/2000/svg" height="50" viewBox="0 -960 960 960" width="50"><path d="M440-360q-17 0-28.5-11.5T400-400v-160q0-17 11.5-28.5T440-600h120q17 3 28.5 11.5T600-560v160q0 17-11.5 28.5T560-360H440Zm20-60h80v-120h-80v120Zm-300 60q-17 0-28.5-11.5T120-400v-160q0-17 11.5-28.5T160-600h120q17 0 28.5 11.5T320-560v40h-60v-20h-80v120h80v-20h60v40q0 17-11.5 28.5T280-360H160Zm520 28.5 11.5T860-440v60q0 17-11.5 28.5T820-340h-80v40h120v60H680Z"/></svg>
                </div>
              </div>
                <div class="">
                  30
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
