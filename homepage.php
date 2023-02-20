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
    <title>Home</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    
    <h2>Home</h2>
    
    <?php if (isset($user)): ?>
        
        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
        
        <p><a href="logout.php">Log out</a></p>
        
    <?php else: ?>
        
        <p><a href="login.php">Log in</a> or <a href="signup.php">sign up</a></p>
        
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
    
          
        <h2>website features</h2>
        <ul>This website enables user to view ,forecast/predict and Report weather using API
<li>API stands for Application Programming Interface. The application can be any software that performs a specific task and the interface is a point where two applications communicate.  </li>

<li> Computers follow a protocol to communicate with each other. A protocol is nothing but a set of rules that computers follow to communicate. Any computer that doesn't follow the protocol breaks the communication thread. APIs available on the web use the HTTP protocol for a number of reasons - it's easy to use and it's popular
  URL a web address where you want to make a request</li> 
      <li>  Method  whether you want data already stored somewhere or want to save new data in a database
        Header all the relevant information about your request including in what format the client device expects to receive the data
        Body the body contains the actual request data</li>
        <li>In our Unsplash example, the URL is https://unsplash.com/s/photos/nature. The method is GET because we want the server to get nature images back. The header includes information like the format our computer expects to get and accept – like language meaning, the language of the device, our operating system, and so on. The body includes the data we need to send to the server, the nature keyword for example.
</li>
       
       <li> When a client makes a request, the server responds to that request. The response might be the data the client requested or an error.
        
        Just like a response, a request has a structure including a URL, status code, header and body. In a request, we have a method, which has four types. And in the response, we have a status code which indicates whether a request has been accepted or declined.
     </li>
     
     <li>helps in analysing data with respect to weather in order to generate reports and store data regarding the conditions of the environment</li>
     
     
     
     
     </ul> 
     <script src="index.js"></script>
     <footer style="background-color:black; text-align:center">
     @Copyright weather forecasting website 2023- All Right Reserved.   
            </footer>
</body>
</html>
     
    
    
    
    
    
    
    
    