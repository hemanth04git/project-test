
<?php 
 $showAlert = false;
 $showError = false;
    include 'partials/_navb.php';
     if($_SERVER["REQUEST_METHOD"] == "POST"){
      include 'partials/_connect.php';
      
        
      $location = $_POST['location'];
      $weather = $_POST['weather'];
      $description = $_POST['description'];
      $exists=false;
      if(isset($location)||isset($weather)||isset($description) && $exists=false){
          $sql = "INSERT INTO  `tool` (` location`, `weather `, `description` ) VALUES ('$location','$weather','$description')";
          $result = mysqli_query($conn, $sql);
          if ($result){
              $showAlert = true;
              echo"inserted successfully";
          }
      }
      else{
          $showError = "error";
      }
  }
      
    
  
 
 
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
<body>
<?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account is now created and you can login
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> '. $showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
    </div> ';
    }
    ?>

 
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
   
            <label for="location">location</label>
            <input type="text" class="form-control" id="location" name="location" >
            
        </div>
        <div class="form-group">
        <label for="weather">weather</label>
            <input type="text" class="form-control" id="weather" name="weather">
        </div>
        <div class="form-group">
        <label for="description">description</label>
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

            

</body>


</html>