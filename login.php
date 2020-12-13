<?php
session_start();
?>


<!DOCTYPE html>

<html>
    <head>
        
   <title>net main hostel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
      
  
    </head>
    <body>
       
        <div class="header" id="topheader">
        
        <nav class="navbar  navbar-expand-lg  fixed-top">
            <div class="container text-uppercase p-2">
            <a class="navbar-brand font-weight-bold text-white" href="index.php">Net main hostel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
          <a class="nav-link" href="index.php">home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="About_Us.php">about us</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="facilities.php">feclities</a>
      </li>
       <li class="nav-item">
           <a class="nav-link" href="stdreg.php">studentreg</a>
      </li>
    <li class="nav-item">
           <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
      
  </div>
            </div>   
            
</nav>
            <section class="header-section">
                <div class="center-div">
                    <h1 class="font-weight-bold color-blue">BEST HOSTEL IN KARNATAKA</h1>
                    <P>we provide the best factilies.</P>
                    <div class="header-buttons">
                        <a href="About_Us.php">AboutUs</a>
                        <a href="ContactUs.php">ContactUs</a>
                    </div>
                </div>
            </section>
            
 </div>
        <?php include 'news&events.php'?>
        
        <section class="serviceoffer" id="servicediv">
            <div class="container heading text-center">
                <h1 class="text-center font-weight-bold">FACLITIES</h1>   
            </div>
        </section>
        
        
  <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="img/jym.jpg" alt="GYM" width="1100" height="500">
      <div class="carousel-caption">
        <h3>gymnasium</h3>
        
      </div>   
    </div>
    <div class="carousel-item">
        <img src="img/pg.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>playground</h3>
        
      </div>   
    </div>
    <div class="carousel-item">
        <img src="img/hp3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>hospital</h3>
        
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
        <div class="icons">
            <ul>
                <a href="#"><li class="facebook"><i class="fa fa-facebook"></i></li></a>
                 <a href="#"><li class="twitter"><i class="fa fa-twitter"></i></li></a>
                  <a href="#"><li class="instagram"><i class="fa fa-instagram"></i></li></a>
                   <a href="#"><li class="youtube"><i class="fa fa-youtube"></i></li></a>
                    <a href="#"><li class="linkedin"><i class="fa fa-linkedin"></i></li></a>
            </ul>
        </div>
         <?php include 'footer.php'?>
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
