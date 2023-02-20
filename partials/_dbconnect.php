<?php


define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'login');


$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


if($conn == false){
    dir('Error: Cannot connect');
}else{
   // echo"success";
}
$sql="INSERT INTO `users` (`sl no`, `username`, `password`) VALUES ('4', 's', 's1234')";
{
   // echo"inserted successfully";
}
?>
