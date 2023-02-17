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
        <li><a href="map.php"> view location </a></li>
      
      <li><a href="view.php"> view Report </a></li>
    
      <li><a href="weather.php"> weather </a></li>
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

    <div class="container">
        <h1>Welcome To Whether Forecasting Website<h1>
  
          
            <table border = "1.5">
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
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d196281.64169563106!2d-104.85511145!3d39.764338949999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x876b80aa231f17cf%3A0x118ef4f8278a36d6!2sDenver%2C%20CO%2C%20USA!5e0!3m2!1sen!2sin!4v1676048138598!5m2!1sen!2sin" width="1600" height="900" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>   
              

</body>
</html>