<?php
  include("./backend/connection.php");

  $select = "SELECT * FROM mq9 ";

?>

<div class="grid-container">
  <div class="grid-item-1 container header">Triosphere</div>

  <div class="grid-item-2 container">
  <div class="card-container">
      <div class="card-header">
        <div class="card-title">
          <h1>
            Carbon Dioxide
          </h1>
        </div>
        <div class="card-logo">
          <img width="50" height="50" src="https://img.icons8.com/ios/50/co2.png" alt="co2"/>
        </div>
      </div>
      <div class="card-value">
        <?php 
          $result = mysqli_query($conn, $select);

          if ($result->num_rows > 0){
                            
                        
            while($row = mysqli_fetch_assoc($result)) {
                $co = $row["co"];

                echo $co ." ". "ppm";
            }
          }
        ?>

      </div>
    </div>
  </div>

  <div class="grid-item-3 container">
  <div class="card-container">
      <div class="card-header">
        <div class="card-title">
          <h1>
            Carbon Monoxide
          </h1>
        </div>
        <div class="card-logo">
        <svg xmlns="http://www.w3.org/2000/svg" height="50" viewBox="0 -960 960 960" width="50"><path d="M440-360q-17 0-28.5-11.5T400-400v-160q0-17 11.5-28.5T440-600h120q17 3 28.5 11.5T600-560v160q0 17-11.5 28.5T560-360H440Zm20-60h80v-120h-80v120Zm-300 60q-17 0-28.5-11.5T120-400v-160q0-17 11.5-28.5T160-600h120q17 0 28.5 11.5T320-560v40h-60v-20h-80v120h80v-20h60v40q0 17-11.5 28.5T280-360H160Zm520 28.5 11.5T860-440v60q0 17-11.5 28.5T820-340h-80v40h120v60H680Z"/></svg>
        </div>
      </div>
      <div class="card-value">
        <?php 
          $result = mysqli_query($conn, $select);

          if ($result->num_rows > 0){
                            
                        
            while($row = mysqli_fetch_assoc($result)) {
                $co = $row["co"];

                echo $co ." ". "ppm";
            }
          }
        ?>
      </div>
    </div>
  </div>  

  <div class="grid-item-4 container">
  <div class="card-container">
      <div class="card-header">
        <div class="card-title">
          <h1>
            Air Quality
          </h1>
        </div>
        <div class="card-logo">
        <img width="50" height="50" src="https://img.icons8.com/ios-filled/50/air-element.png" alt="air-element"/>
        </div>
      </div>
      <div class="card-value">
        <?php 
          $result = mysqli_query($conn, $select);

          if ($result->num_rows > 0){
                            
                        
            while($row = mysqli_fetch_assoc($result)) {
                $co = $row["co"];

              if ($co > 15000) {
                  echo "Moderate";
              } else if ($co > 30000) {
                  echo "Unhealthy";
               } else if ($co > 40000) {
                  echo "dangerous";
               } else {
                echo "Good";
               }
          }
        }
        ?>
      </div>
    </div>
  </div>

  <div class="grid-item-5 container">
  <div class="card-container">
      <div class="card-header">
        <div class="card-title">
          <h1>
            Methane
          </h1>
        </div>
        <div class="card-logo">
        <img width="50" height="50" src="https://img.icons8.com/ios/50/gas.png" alt="gas"/>
        </div>
      </div>
      <div class="card-value">
        <?php 
        $result = mysqli_query($conn, $select);
          if ($result->num_rows > 0){
                            
                        
            while($row = mysqli_fetch_assoc($result)) {
                $methane = $row["methane"];

                echo $methane ." ". "ppm";
            }
          }
        ?>
      </div>
    </div>
  </div>

  <div class="grid-item-6 container">
  <div class="card-container">
      <div class="card-header">
        <div class="card-title">
          <h1>
            Ammonia
          </h1>
        </div>
        <div class="card-logo">
        <img width="64" height="64" src="https://img.icons8.com/external-kmg-design-detailed-outline-kmg-design/64/external-ammonia-dental-kmg-design-detailed-outline-kmg-design.png" alt="external-ammonia-dental-kmg-design-detailed-outline-kmg-design"/>       </div>
      </div>
      <div class="card-value">
        <?php 
          $result = mysqli_query($conn, $select);

          if ($result->num_rows > 0){
                            
                        
            while($row = mysqli_fetch_assoc($result)) {
                $ammonia = $row["co"];

                echo $ammonia ." ". "ppm";
            }
          }
        ?>
      </div>
    </div>
  </div>  

  <div class="grid-item-7 container">
  <div class="card-container">
      <div class="card-header">
        <div class="card-title">
          <h1>
            History
          </h1>
        </div>
        <div class="card-logo">

        </div>
      </div>
      <div class="card-value">
        <?php 
          if ($result->num_rows > 0){
                            
                        
            while($row = mysqli_fetch_assoc($result)) {
                $co = $row["co"];

                echo $co;
            }
          }
        ?>
      </div>
    </div>
  </div>
</div>