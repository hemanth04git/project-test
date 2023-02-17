
<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> weather forecasting website</title>
    
    <link rel="stylesheet" href="view.css">
   
</head>
<body>
    
    <header>
     <nav class="navbar">
      <ul>
        <li><a href="index.php"> Home </a></li>
        <li><a href="map.php"> view location</a></li>
      
      <li><a href="view.php"> report weather</a></li>
    
      <li><a href="weather.php">weather </a></li>
      <li>
      <li >
        <a class="nav-link" href="/loginsystem/logout.php">Logout</a>
      </li>
        <div class ="search">
          <input type="text"name="search"id="search"placeholder="search">

        </div>
   

      </ul>
    </header>
    <a class="weatherwidget-io" href="https://forecast7.com/en/32d96n102d83/denver-city/" data-label_1="DENVER CITY" data-label_2="WEATHER" data-theme="original" >DENVER CITY WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>

  </nav>
  <img class="bg"src="bg.jpg" alt="whether forecast">
  <div class="container my-4">
     <h1 class="text-center">weather reporting tool</h1>
     <form action="/loginsystem/view.php" method="post">
     

        <div class="form-group">
   
            
            <input type="text" class="form-control" id="location" name="location" >
            
        </div>
        <div class="form-group">
          
            <input type="text" class="form-control" id="weather" name="weather">
        </div>
        <div class="form-group">
         
            <input type="text" class="form-control" id="description" name="description">
        </div>
       
         
        <button type="submit" class="btn btn-primary">submit</button>
     </form>
    </div>
<table border="2">
  <tr>
    <th>sl.no</th>
    <th>location</th>
    <th>weather</th>
    <th>description</th>
</tr>

<?php 
     include 'partials/_vconnect.php';
    
     if($_SERVER["REQUEST_METHOD"] == "POST"){
      include 'partials/_vconnect.php';
      if(isset($id)||isset($location)||isset($weather)||isset($description)){
        $id=$_POST['id'];
      $location = $_POST['location'];
      $weather = $_POST['weather'];
      $description = $_POST['description'];
     $query="SELECT * FROM tool";
     $data=mysqli_connect($conn,$query);
     $total=mysqli_num_rows($data);
     $result=mysqli_fetch_assoc($data);
     echo $total;
if($total!=0)
 while($result=mysqli_fetch_assoc($data));
 {
  echo"
  <tr>
  <td>".$result['id']."</td>
  <td> ".$result['location']."</td>
  <td>".$result['weather']."</td>
  <td> ".$result['description'] ."</td>";
 }
      }
    }
 
  
 
 
 ?>
 
       </table>   
            
           
            </div>
            
</div> 
              
  </div>
</body>
</html>