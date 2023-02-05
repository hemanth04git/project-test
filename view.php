<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> whether forecasting website</title>
    
    <link rel="stylesheet" href="view.css">
   
</head>
<body>
    
    <header>
     <nav class="navbar">
      <ul>
        <li><a href="index.html"> Home </a></li>
        <li><a href="report.html"> Report whether </a></li>
      
      <li><a href="view.html"> view Report </a></li>
    
      <li><a href="whether.html"> Whether </a></li>
      <li>
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

    <div class="container">
        <h1>Welcome To Whether Forecasting Website<h1>
          <p>  Enter the Details </p>
          <form action="index.php" method="post">
           
            <input type ="text" name="name" id="name" placeholder="enter the place"><br>
            <input type ="text" name="name" id="username" placeholder="enter the whether "><br>
        
             <button class="btn"> submit</button>
            <button class="btn"> clear </button>
            </form>
          
            <table border = "1">
         <tr>
            <td>location</td>
            <td>whether</td>
         </tr>
         
         <tr>
            <td>denver</td>
            <td>cloudy 51°C</td>
         </tr>
      </table>
              </div>
           
            </div>
            
             
              
<script src="index.js"></script>
</body>
</html>