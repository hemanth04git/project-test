<?php
include 'partials/_navb.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> weather forecasting website</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="view.css">
  
   
</head>
<body class="bg-dark">
    

    <a class="weatherwidget-io" href="https://forecast7.com/en/32d96n102d83/denver-city/" data-label_1="DENVER CITY" data-label_2="WEATHER" data-theme="original" >DENVER CITY WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>

  </nav>
 
    <div class="container">
        <h1 style="text-align:center;   border-color: black;
  border-width:2px;
  border-radius: 3px;
  border-style: solid; ">Welcome To weather Forecasting Website</h1>
  <div >
    <div class="col">
      <div class="card mt-5">
        <div class="card-header">
</div>
<div class="card-body">
  
<table align="center"  border="2px" style="width:400px; background-color: blueviolet line-height:40px;"> 
    <tr>
      

      <td>location</td><br>

      <td>weather</td><br>

      <td>description</td><br>
</tr>
</table>
</div>

<?php
include 'partials/_connect.php';
    
    $sql="SELECT * FROM tool";
    $result=mysqli_query($conn, $sql);
    {

    

echo"<table border='2'>";
echo" <tr>

<td>location</td>
<td>weather</td>
<td>description</td>
</tr>";}
    
    while($row=mysqli_fetch_assoc($result)){
      echo"<tr>

<td>{$row['location']}</td>
<td>{$row['weather']}</td>
<td>{$row['description']}</td>
</tr>";

    }        


   
  
  

echo"</table>";
?>

          

            </div>
            
          
              
               <footer style="background-color:black; text-align:center">
  @Copyright weather forecasting website 2023- All Right Reserved.   
</footer>
</html>