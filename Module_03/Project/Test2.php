   <?php
   include 'mod3_config.php';
   include 'mod3_opendb.php';

   $sql= "SELECT FlavorName, StartDate, EndDate From flavors LIMIT 10";
   $result = mysqli_query($conn, $sql);

   if (mysqli_num_rows($result) > 0){
     while ($row = mysqli_fetch_acssoc($result)) {
       echo .$row["Flavor Name"]. "<br>";
       echo .$row["Start Date"]. "<br>";
       echo .$row["End Date"]. "<br><hr>";
     }
   }else {
       echo "0 results";
   }

   mysqli_close($conn);

   ?>
