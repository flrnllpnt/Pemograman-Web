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

                <li class="nav-item active"><a class="nav-link" href="packages.php">Packages</a></li>

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
    <div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Our</h4>
              <h2>Packages</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
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
                  <td><a href="package2-details.php"><h4><a href="package2-details.php?name=<?= $row["name"] ?>"><?= $row["name"] ?></h4></a></a></td>
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
                  <td><a href="package3-details.php"><h4><a href="package3-details.php?name=<?= $row["name"] ?>"><?= $row["name"] ?></h4></a></a></td>
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

          <div class="col-md-4">
            <div class="product-item">
              <a href="package4-details.php"><img src="assets/images/product-4-370x270.jpg" alt=""></a>
              <div class="down-content">
              <?php 
                  $strSQL = "SELECT * FROM theoberoi"; 
                    $execStrSQL = mysqli_query($conn,$strSQL);

                    if (mysqli_num_rows($execStrSQL) > 0) {
                    while ($row = mysqli_fetch_assoc($execStrSQL)) {
                ?>
                <tr>
                  <td><a href="package4-details.php"><h4><a href="package4-details.php?name=<?= $row["name"] ?>"><?= $row["name"] ?></h4></a></a></td>
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


          <div class="col-md-4">
            <div class="product-item">
              <a href="package5-details.php"><img src="assets/images/product-5-370x270.jpg" alt=""></a>
              <div class="down-content">
              <?php 
                  $strSQL = "SELECT * FROM pinkbuilding"; 
                    $execStrSQL = mysqli_query($conn,$strSQL);

                    if (mysqli_num_rows($execStrSQL) > 0) {
                    while ($row = mysqli_fetch_assoc($execStrSQL)) {
                ?>
                <tr>
                  <td><a href="package5-details.php"><h4><a href="package5-details.php?name=<?= $row["name"] ?>"><?= $row["name"] ?></h4></a></a></td>
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
              <a href="package6-details.php"><img src="assets/images/product-6-370x270.jpg" alt=""></a>
              <div class="down-content">
              <?php 
                  $strSQL = "SELECT * FROM seriburesort"; 
                    $execStrSQL = mysqli_query($conn,$strSQL);

                    if (mysqli_num_rows($execStrSQL) > 0) {
                    while ($row = mysqli_fetch_assoc($execStrSQL)) {
                ?>
                <tr>
                  <td><a href="package6-details.php"><h4><a href="package6-details.php?name=<?= $row["name"] ?>"><?= $row["name"] ?></h4></a></a></td>
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
