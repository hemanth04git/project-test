<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}
include 'partials/_navb.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title style="align=center";>Home</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="background-color=gray";>
    
    <h2>Home</h2>
    
    <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
        
        <p><a href="logout.php">Log out</a></p>
        
    <?php else: ?>
        
        <p style="text-align:center; "><a href="login.php">Log in</a> or <a href="signup.php">sign up</a></p>
        
    <?php endif; ?>
    <div class="container">
        
          <form action="index.php" method="post">
          <body>


    

    <a class="weatherwidget-io" href="https://forecast7.com/en/32d96n102d83/denver-city/" data-label_1="DENVER CITY" data-label_2="WEATHER" data-theme="original" >DENVER CITY WEATHER</a>
<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>

  </nav>


    <div class="container">
    <h1 style="text-align:center;   border-color: black; border-width:2px; border-radius: 3px; border-style: solid; ">Welcome To weather Forecasting Website</h1>
    
          
    
     
    
    
    
    
    
    
    

          


    <div class="container my-4">
        <div class="row featurette d-flex justify-content-center align-items-center">
            <div class="col-md-7">
                <h2 class="featurette-heading">It all started with an innovation Idea. <span class="text-muted">
                       </span></h2>
                <p class="lead">Computers follow a protocol to communicate with each other. A protocol is nothing but a set of rules that computers follow to communicate. Any computer that doesn't follow the protocol breaks the communication thread. APIs available on the web use the HTTP protocol for a number of reasons - it's easy to use and it's popular
  URL a web address where you want to make a request 
        Method  whether you want data already stored somewhere or want to save new data in a database
        Header all the relevant information about your request including in what format the client device expects to receive the data</p>
            </div>
            <div class="col-md-5">
                <img class="img-fluid" src="sunny.jpg" alt="no image found">
                 
            </div>
        </div>
        <div class="row featurette d-flex justify-content-center align-items-center">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">website features <span class="text-muted">
 </span></h2>
                <p class="lead">
    weather forecasting website can be used for analysing weather forecasting data convenantly.
while it can be used to generate weather forecasting reports.
weather forecasting website can store day-to-day weather data using weather forecasting tool.
it  is a reliable and accurate source of information.
weather forecasting website can be used for research and  paper generation purposes.

</p>

            </div>

            
            <div class="col-md-5">
                <img class="img-fluid" src="weather.jpg" alt="no image found">


            
            </div>


         
                 
            </div>
        </div>
       
      
                 
         
        </div>
    </div>

   
 
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
        <script src="index.js"></script>
     <footer style="background-color:black; text-align:center">
     @Copyright weather forecasting website 2023- All Right Reserved.   
            </footer>

</body>

</html>