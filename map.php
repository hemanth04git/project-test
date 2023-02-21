


      


            
<?php
include 'partials/_navb.php';
?>
<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" href="view.css">
  
     <title>weather forecasting website</title>
</head>
<body >

    <div class="card text-center">
        <div class="card-header">
          Featured
        </div>
                      
        <div class="container-fluid">
      <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://source.unsplash.com/1400x400/?landscape" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://source.unsplash.com/1400x400/?nature" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="https://source.unsplash.com/1400x400/?scenery" class="d-block w-100" alt="...">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
     

        <div class="card-body">
          <h5 class="card-title">displaying weather details</h5>
          <p class="card-text"> from database.</p>
          <a href="view.php" class="card-data">store data</a>
        </div>



  
 


    <div class="container">
        <div class="row bg-danger" style="align=center";>
          <div class="col-md-4col-sm-4 col-4border" >
       fetched values from database
          </div>
        
        </div>
        <div class="row bg-success">
          <div class="col-md-1col-sm-1col-1 border">
    
          </div>
        
          <?php
include 'partials/_connect.php';
    
    $sql="SELECT * FROM tool";
    $result=mysqli_query($conn, $sql);
    

    
    {

    

      echo"<table border='5'>";
      echo" <tr>
      
      <td>Location</td>
      <td>Weather</td>
      <td>Description</td>
      </tr>";}
          
    
    while($row=mysqli_fetch_assoc($result)){
      echo"<tr>

<td>{$row['location']}</td><br>
<td>{$row['weather']}</td>
<td>{$row['description']}</td><br>
</tr>";

    }        


   
  
  

echo"</table>";
?>

          

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
                  
              
        <footer style="background-color:black; text-align:center">
  @Copyright weather forecasting website 2023- All Right Reserved.   
</footer>

</body>

</html>