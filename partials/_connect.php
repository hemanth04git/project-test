<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'view');


$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


if($conn == false){
    dir('Error: Cannot connect');
}else{
  //  echo"success";
}


$sql="INSERT INTO `tool` (`location`, `weather`, `description`) VALUES ('denver', '1', '4')";
{
 // echo"inserted successfully";
}

?>
