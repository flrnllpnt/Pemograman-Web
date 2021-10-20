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
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="packages.php">Packages</a></li>

                <li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="about-us.php">About Us</a>
                      <a class="dropdown-item" href="testimonials.php">Testimonials</a>
                    </div>
                </li>
                
                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Buatlah Harimu Menyenangkan!</h4>
            <h2>HIDUPMU AKAN BAHAGIA</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>TEMUKAN TEMPAT TERNYAMANMU</h4>
            <h2>TEMPAT NYAMAN AKAN MEMBUAT HARIMU MENYENANGKAN</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>BAHAGIAKAN DIRIMU</h4>
            <h2>KEBAHAGIAAN AKAN MEMBUAT JIWAMU BERGELORA</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Featured Vacations</h2>
              <a href="packages.php">view more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="package1-details.php"><img src="assets/images/product-1-370x270.jpg" alt=""></a>
              <div class="down-content">
              <?php 
                  $strSQL = "SELECT * FROM manoharahotel"; 
                    $execStrSQL = mysqli_query($conn,$strSQL);

                    if (mysqli_num_rows($execStrSQL) > 0) {
                    while ($row = mysqli_fetch_assoc($execStrSQL)) {
                ?>
                <tr>
                  <td><a href="package1-details.php"><h4><a href="package-details.php?name=<?= $row["name"] ?>"><?= $row["name"] ?></h4></a></a></td>
                  <td><h6><?= $row["price"] ?></h6></td>
                  <td><p><?= $row["description"] ?></p></td>
                </tr>
                <?php 
              }
              }
              ?>  
              <p></p>
                <small>
                     <strong title="Available"><i class="fa fa-calendar"></i> Spring</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Nights"><i class="fa fa-cube"></i> 4 nights</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Flight included"><i class="fa fa-plane"></i> Flight included</strong>
                </small>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="package2-details.php"><img src="assets/images/product-2-370x270.jpg" alt=""></a>
              <div class="down-content">
              <?php 
                  $strSQL = "SELECT * FROM tongginghotel"; 
                    $execStrSQL = mysqli_query($conn,$strSQL);

                    if (mysqli_num_rows($execStrSQL) > 0) {
                    while ($row = mysqli_fetch_assoc($execStrSQL)) {
                ?>
                <tr>
                  <td><a href="package2-details.php"><h4><a href="package-details.php?name=<?= $row["name"] ?>"><?= $row["name"] ?></h4></a></a></td>
                  <td><h6><?= $row["price"] ?></h6></td>
                  <td><p><?= $row["description"] ?></p></td>
                </tr>
                <?php 
              }
              }
              ?>  
              <p></p>
                <small>
                     <strong title="Available"><i class="fa fa-calendar"></i> Spring</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Nights"><i class="fa fa-cube"></i> 3 nights</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Flight included"><i class="fa fa-plane"></i> Flight included</strong>
                </small>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="package3-details.php"><img src="assets/images/product-3-370x270.jpg" alt=""></a>
              <div class="down-content">
              <?php 
                  $strSQL = "SELECT * FROM nusaduabeachhotel"; 
                    $execStrSQL = mysqli_query($conn,$strSQL);

                    if (mysqli_num_rows($execStrSQL) > 0) {
                    while ($row = mysqli_fetch_assoc($execStrSQL)) {
                ?>
                <tr>
                  <td><a href="package3-details.php"><h4><a href="package-details.php?name=<?= $row["name"] ?>"><?= $row["name"] ?></h4></a></a></td>
                  <td><h6><?= $row["price"] ?></h6></td>
                  <td><p><?= $row["description"] ?></p></td>
                </tr>
                <?php 
              }
              }
              ?>  
              <p></p>
                <small>
                     <strong title="Available"><i class="fa fa-calendar"></i> Spring</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Nights"><i class="fa fa-cube"></i> 2 nights</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                     <strong title="Flight included"><i class="fa fa-plane"></i> Flight included</strong>
                </small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Us</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
            <?php 
                  $strSQL = "SELECT * FROM aboutus"; 
                    $execStrSQL = mysqli_query($conn,$strSQL);

                    if (mysqli_num_rows($execStrSQL) > 0) {
                    while ($row = mysqli_fetch_assoc($execStrSQL)) {
                ?>
                <tr>
                  <td><br><?= $row["shortver"] ?></br></td>
                </tr>
                <?php 
              }
              }
              ?>  
              <a href="about-us.php" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/about-1-570x350.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="services" style="background-image: url(assets/images/other-image-fullscren-1-1920x900.jpg);" >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest blog posts</h2>

              <a href="blog.php">read more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="#" class="services-item-image"><img src="assets/images/blog-1-370x270.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="#">Disc 30% Aston Bogor Hotel</a></h4>

                <p style="margin: 0;"> Ariyan Wijaya &nbsp;&nbsp;|&nbsp;&nbsp; 15/06/2021 08:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="#" class="services-item-image"><img src="assets/images/blog-2-370x270.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="#">Resort Bertema Family Friendly Kini Hadir di Pucak</a></h4>

                <p style="margin: 0;"> Abigail &nbsp;&nbsp;|&nbsp;&nbsp; 20/09/2021 11:00 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="#" class="services-item-image"><img src="assets/images/blog-3-370x270.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="#">Sudut Baru di Kintan Resort ini dibuat seperti Anda sedang Berada di Pinggir Pantai</a></h4>

                <p style="margin: 0;"> Johnny Deep &nbsp;&nbsp;|&nbsp;&nbsp; 30/09/2021 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="happy-clients">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Happy Clients</h2>

              <a href="testimonials.php">read more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-clients owl-carousel text-center">
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
                  <td><a href="testimonials.php?name=<?= $row["name"] ?>"><?= $row["name"] ?></a></td>
                  <td><br><?= $row["comments"] ?></br></td>
                </tr>
                <?php 
              }
              }
              ?>  
                </div>
              </div>
              
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
                  <td><a href="testimonials.php?name=<?= $row["name"] ?>"><?= $row["name"] ?></a></td>
                  <td><br><?= $row["comments"] ?></br></td>
                </tr>
                <?php 
              }
              }
              ?>  
                </div>
              </div>
              
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
                  <td><a href="testimonials.php?name=<?= $row["name"] ?>"><?= $row["name"] ?></a></td>
                  <td><br><?= $row["comments"] ?></br></td>
                </tr>
                <?php 
              }
              }
              ?>  
                </div>
              </div>
              
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
                  <td><a href="testimonials.php?name=<?= $row["name"] ?>"><?= $row["name"] ?></a></td>
                  <td><br><?= $row["comments"] ?></br></td>
                </tr>
                <?php 
              }
              }
              ?>  
                </div>
              </div>
              
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
                  <td><a href="testimonials.php?name=<?= $row["name"] ?>"><?= $row["name"] ?></a></td>
                  <td><br><?= $row["comments"] ?></br></td>
                </tr>
                <?php 
              }
              }
              ?>  

                </div>
              </div>
              
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
                  <td><a href="testimonials.php?name=<?= $row["name"] ?>"><?= $row["name"] ?></a></td>
                  <td><br><?= $row["comments"] ?></br></td>
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
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Kontak Kami!</h4>
                  <p>Ingin Memakai Jasa Kami? Klik Link Berikut.</p>
                </div>
                <div class="col-lg-4 col-md-6 text-right">
                  <a href="contact.php" class="filled-button">Contact Us</a>
                </div>
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
              <p>Copyright © 2021 Fantastic Agency </p>
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