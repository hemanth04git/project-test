
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
       
        $sql="INSERT INTO `tool` (`location`, `weather`, `description`) VALUES ('$location', '$weather', '$description')";
          
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <link rel="stylesheet" href="view.css">
   
</head>
<body>
<?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> data entered into database
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




  <div class="container my-5" style="background-color:gray;">
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
      

</body>
</html>