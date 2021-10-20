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

                <li class="nav-item active"><a class="nav-link" href="blog.php">Blog</a></li>

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
              <h2>Blog</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="service-item">
                  <a class="services-item-image"><img src="assets/images/blog-1-370x270.jpg" class="img-fluid" alt=""></a>

                  <div class="down-content">
                    <h4>Disc 30% Aston Bogor Hotel</h4>

                    <p style="margin: 0;"> Ariyan Wijaya &nbsp;&nbsp;|&nbsp;&nbsp; 15/06/2021 08:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="service-item">
                  <a class="services-item-image"><img src="assets/images/blog-2-370x270.jpg" class="img-fluid" alt=""></a>

                  <div class="down-content">
                    <h4>Resort Bertema Family Friendly Kini Hadir di Pucak</h4>

                    <p style="margin: 0;"> Abigail &nbsp;&nbsp;|&nbsp;&nbsp; 20/09/2021 11:00 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="service-item">
                  <a class="services-item-image"><img src="assets/images/blog-3-370x270.jpg" class="img-fluid" alt=""></a>

                  <div class="down-content">
                    <h4>Sudut Baru di Kintan Resort ini dibuat seperti Anda sedang Berada di Pinggir Pantai</h4>

                    <p style="margin: 0;"> Johnny Deep &nbsp;&nbsp;|&nbsp;&nbsp; 30/09/2021 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
                  </div>
                </div>
              </div>

              <div class="col-md-6">
                <div class="service-item">
                  <a ]class="services-item-image"><img src="assets/images/blog-4-370x270.jpg" class="img-fluid" alt=""></a>

                  <div class="down-content">
                    <h4>Festival Balon Udara digelar Setiap Tahunnya di Nusa Penida</h4>

                    <p style="margin: 0;"> Rachel Adisty &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2021 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="service-item">
                  <a class="services-item-image"><img src="assets/images/blog-5-370x270.jpg" class="img-fluid" alt=""></a>

                  <div class="down-content">
                    <h4>Daftar Kamera Recomended untuk Kamu yang Suka Photography</h4>

                    <p style="margin: 0;"> Abimana Aresta &nbsp;&nbsp;|&nbsp;&nbsp; 12/07/2021 06:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="service-item">
                  <a class="services-item-image"><img src="assets/images/blog-6-370x270.jpg" class="img-fluid" alt=""></a>

                  <div class="down-content">
                    <h4>Cafe Unik Ini Berada di Nusa Dua</h4>

                    <p style="margin: 0;"> Ari Lasso &nbsp;&nbsp;|&nbsp;&nbsp; 21/05/2021 07:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

<?php 
include "koneksi.php";
include "fungsi.php";
$name = $email = $message = " ";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = bersihkan_input($_POST['name']);
    $email = bersihkan_input($_POST['email']);
    $message = bersihkan_input($_POST['message']);


    $strSQL = "INSERT INTO comments (name, email, massage) 
    VALUES ('$name','$email','$message')";

    //echo "Query = ".$strSQL;
    $execStrSQL = mysqli_query($conn, $strSQL);
    if ($execStrSQL) {
?>
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <b>Successfully</b> submitted
        </div>
<?php        
    }
    else {
?>
        <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <b>Unsuccessfully</b> submitted <br>
            <?php echo "Error: ".$execStrSQL. "<br>".mysqli_error($conn); ?>
        </div>
<?php         
    }
}

?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
      <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Leave a Comment</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Submit</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="col-md-4">
              <div class="left-content">

                <p>Temukan Kami di Sosial Media Kami.</p>

                <br> 

                <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>

              </ul>
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