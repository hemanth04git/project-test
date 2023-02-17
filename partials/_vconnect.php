<?php
/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'login');

// Try connecting to the Database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($conn == false){
    dir('Error: Cannot connect');
}else{
    echo"success";
}
if(isset($id)||isset($location)||isset($weather)||isset($description)){
  $id=$_POST['id'];
$location = $_POST['location'];
$weather = $_POST['weather'];
$description = $_POST['description'];


$sql="INSERT INTO `tool` (` id`,`location`, `weather`,`description`) VALUES ('$location','$weather','$description')";
$sql="INSERT INTO `tool` (`id`, `location`, `weather`, `description`) VALUES ('12', 'denver', '51 c', 'wea in d')";
{
  echo"inserted successfully";
}
}
?>
