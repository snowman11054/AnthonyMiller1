<?php
//Create connection
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
// Chech connection
if(!$conn){
  die("Connection Failed: " . mysqli_connect_error());
}
?>
