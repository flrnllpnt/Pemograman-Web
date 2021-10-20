<?php 
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>FAgency.com | Fantastic Agency Website</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>
    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Fantastic Agency <em>Website</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="packages.php">Packages</a></li>

                <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>

                <li class="nav-item dropdown active">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="about-us.php">About Us</a>
                      <a class="dropdown-item active" href="testimonials.php">Testimonials</a>
                    </div>
                </li>
                
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-3-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>OUR</h4>
              <h2>Testimonials</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="services section-background">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <div class="down-content">
              <?php 
                  $strSQL = "SELECT * FROM kimmy"; 
                    $execStrSQL = mysqli_query($conn,$strSQL);

                    if (mysqli_num_rows($execStrSQL) > 0) {
                    while ($row = mysqli_fetch_assoc($execStrSQL)) {
                ?>
                <tr>
                  <h4><?= $row["name"] ?></h4>
                  <p class="n-m"><em><h6><?= $row["comments"] ?></h6></em></p>
                </tr>
                <?php 
              }
              }
              ?>  
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <div class="down-content">
              <?php 
                  $strSQL = "SELECT * FROM anthonys"; 
                    $execStrSQL = mysqli_query($conn,$strSQL);

                    if (mysqli_num_rows($execStrSQL) > 0) {
                    while ($row = mysqli_fetch_assoc($execStrSQL)) {
                ?>
                <tr>
                  <h4><?= $row["name"] ?></h4>
                  <p class="n-m"><em><h6><?= $row["comments"] ?></h6></em></p>
                </tr>
                <?php 
              }
              }
              ?>  
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <div class="down-content">
              <?php 
                  $strSQL = "SELECT * FROM anggun"; 
                    $execStrSQL = mysqli_query($conn,$strSQL);

                    if (mysqli_num_rows($execStrSQL) > 0) {
                    while ($row = mysqli_fetch_assoc($execStrSQL)) {
                ?>
                <tr>
                  <h4><?= $row["name"] ?></h4>
                  <p class="n-m"><em><h6><?= $row["comments"] ?></h6></em></p>
                </tr>
                <?php 
              }
              }
              ?>  
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <div class="down-content">
              <?php 
                  $strSQL = "SELECT * FROM anastasya"; 
                    $execStrSQL = mysqli_query($conn,$strSQL);

                    if (mysqli_num_rows($execStrSQL) > 0) {
                    while ($row = mysqli_fetch_assoc($execStrSQL)) {
                ?>
                <tr>
                  <h4><?= $row["name"] ?></h4>
                  <p class="n-m"><em><h6><?= $row["comments"] ?></h6></em></p>
                </tr>
                <?php 
              }
              }
              ?>  
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <div class="down-content">
              <?php 
                  $strSQL = "SELECT * FROM james"; 
                    $execStrSQL = mysqli_query($conn,$strSQL);

                    if (mysqli_num_rows($execStrSQL) > 0) {
                    while ($row = mysqli_fetch_assoc($execStrSQL)) {
                ?>
                <tr>
                  <h4><?= $row["name"] ?></h4>
                  <p class="n-m"><em><h6><?= $row["comments"] ?></h6></em></p>
                </tr>
                <?php 
              }
              }
              ?>  
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <div class="down-content">
              <?php 
                  $strSQL = "SELECT * FROM travis"; 
                    $execStrSQL = mysqli_query($conn,$strSQL);

                    if (mysqli_num_rows($execStrSQL) > 0) {
                    while ($row = mysqli_fetch_assoc($execStrSQL)) {
                ?>
                <tr>
                  <h4><?= $row["name"] ?></h4>
                  <p class="n-m"><em><h6><?= $row["comments"] ?></h6></em></p>
                </tr>
                <?php 
              }
              }
              ?>  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2021 Fantastic Agency</p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>

</html>
