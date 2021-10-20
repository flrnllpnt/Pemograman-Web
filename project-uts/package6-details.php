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
          <a class="navbar-brand" href="index.php"><h2>Travel Agency <em>Website</em></h2></a>
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
              <h4>Rp 2.000.000 - Rp 3.000.000</h4>

              <h2>Seribu Resort & Hotel</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div>
              <img src="assets/images/product-6-370x270.jpg" alt="" class="img-fluid wc-image">
            </div>
            <br>
            <div class="row">
              <div class="col-sm-4 col-6">
                <div>
                </div>
                <br>
              </div>
              <div class="col-sm-4 col-6">
                <div>
                </div>
                <br>
              </div>
              <div class="col-sm-4 col-6">
                <div>
                </div>
                <br>
              </div>
            </div>
          </div>

          <div class="col-md-6">
              <p class="lead">
                   <i class="fa fa-calendar"></i> Available: Spring &nbsp;&nbsp; <i class="fa fa-cube"></i> 3 nights &nbsp;&nbsp; <i class="fa fa-plane"></i> Flight included
              </p>

              <br>

              <p><i class="fa fa-map-marker"></i>  <strong>Pulau Harapan, Kepulauan Seribu Utara, Pulau Harapan, Kepulauan Seribu Utara, Kabupaten Kepulauan Seribu, Daerah Khusus Ibukota Jakarta 14540</strong></p>
              <br>
              <?php 
                  $strSQL = "SELECT * FROM seriburesort"; 
                    $execStrSQL = mysqli_query($conn,$strSQL);

                    if (mysqli_num_rows($execStrSQL) > 0) {
                    while ($row = mysqli_fetch_assoc($execStrSQL)) {
                ?>
                <tr>
                  <td><p><?= $row["deskripsinya"] ?></p></td>
                </tr>
                <?php 
              }
              }
              ?>  
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="section-heading" style="border: 0">
          <h2>Availability &amp; Prices</h2>
        </div>

        <div class="table-responsive">
          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table">
               <thead>
                    <tr>
                         <th>Package</th>
                         <th>From</th>
                         <th>To</th>
                         <th>Price</th>
                    </tr>
               </thead>
               
               <tbody>
                    <tr>
                         <td>Murah Meriah (flight exclude)</td>
                         <td>01-06-2021</td>
                         <td>02-06-2021</td>
                         <td>Rp 800.000 per night</td>
                    </tr>

                    <tr>
                         <td>Rose (flight include)</td>
                         <td>01-06-2021</td>
                         <td>03-06-2021</td>
                         <td>Rp 2.000.000 total price</td>
                    </tr>
               </tbody>
          </table>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="section-heading" style="border: 0">
          <h2>Info</h2>
        </div>

        <ul class="list-group list-group-flush">
          <li class="list-group-item">
               <div class="row">
                    <div class="col-md-2 col-sm-3">
                         <p class="pjVpProductPolicyTitle">
                              <strong>Check-in</strong>
                         </p>
                    </div>
                    <div class="col-md-10 col-sm-9">
              <?php 
                  $strSQL = "SELECT * FROM info"; 
                    $execStrSQL = mysqli_query($conn,$strSQL);

                    if (mysqli_num_rows($execStrSQL) > 0) {
                    while ($row = mysqli_fetch_assoc($execStrSQL)) {
                ?>
                <tr>
                  <td><p><?= $row["checkin"] ?></p></td>
                </tr>
                <?php 
              }
              }
              ?>  
                    </div>
               </div>
          </li>

          <li class="list-group-item">
               <div class="row">
                    <div class="col-md-2 col-sm-3">
                         <p>
                              <strong>Check-out</strong>
                         </p>
                    </div>

                    <div class="col-md-10 col-sm-9">
              <?php 
                  $strSQL = "SELECT * FROM info"; 
                    $execStrSQL = mysqli_query($conn,$strSQL);

                    if (mysqli_num_rows($execStrSQL) > 0) {
                    while ($row = mysqli_fetch_assoc($execStrSQL)) {
                ?>
                <tr>
                  <td><p><?= $row["checkout"] ?></p></td>
                </tr>
                <?php 
              }
              }
              ?>  
                    </div>
               </div>
          </li>

          <li class="list-group-item">
               <div class="row">
                    <div class="col-md-2 col-sm-3">
                         <p>
                              <strong>Pets</strong>
                         </p>
                    </div>
                    <div class="col-md-10 col-sm-9">
              <?php 
                  $strSQL = "SELECT * FROM info"; 
                    $execStrSQL = mysqli_query($conn,$strSQL);

                    if (mysqli_num_rows($execStrSQL) > 0) {
                    while ($row = mysqli_fetch_assoc($execStrSQL)) {
                ?>
                <tr>
                  <td><p><?= $row["pets"] ?></p></td>
                </tr>
                <?php 
              }
              }
              ?>  
              </p>
                    </div>
               </div>
          </li>

          <li class="list-group-item">
               <div class="row">
                    <div class="col-md-2 col-sm-3">
                         <p>
                              <strong>Policies</strong>
                         </p>
                    </div>
                    <div class="col-md-10 col-sm-9">
                         <div>
              <?php 
                  $strSQL = "SELECT * FROM info"; 
                    $execStrSQL = mysqli_query($conn,$strSQL);

                    if (mysqli_num_rows($execStrSQL) > 0) {
                    while ($row = mysqli_fetch_assoc($execStrSQL)) {
                ?>
                <tr>
                  <td><p><?= $row["policies"] ?></p></td>
                </tr>
                <?php 
              }
              }
              ?>  
                         </div>
                    </div>
               </div>
          </li>
          
          <li class="list-group-item">
               <div class="row">
                    <div class="col-md-2 col-sm-3">
                         <p>
                              <strong>Fees</strong>
                         </p>
                    </div>

                    <div class="col-md-10 col-sm-9">
                         <div>
                         <?php 
                  $strSQL = "SELECT * FROM info"; 
                    $execStrSQL = mysqli_query($conn,$strSQL);

                    if (mysqli_num_rows($execStrSQL) > 0) {
                    while ($row = mysqli_fetch_assoc($execStrSQL)) {
                ?>
                <tr>
                  <td><p><?= $row["fees"] ?></p></td>
                </tr>
                <?php 
              }
              }
              ?>  
                         </div>
                    </div>
               </div>
          </li>
     </ul>


      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row">
        <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="section-heading">
              <h2>Enquiry</h2>
            </div>
            <?php 
include "koneksi.php";
include "fungsi.php";
$name = $email = $phone = $date1 = $date2 = $pesan = " ";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = bersihkan_input($_POST['name']);
    $email = bersihkan_input($_POST['email']);
    $phone = bersihkan_input($_POST['phone']);
    $date1 = bersihkan_input($_POST['date1']);
    $date2 = bersihkan_input($_POST['date2']);
    $pesan = bersihkan_input($_POST['pesan']);


    $strSQL = "INSERT INTO enquiryseribu (name, email, phone, date1, date2, pesan) 
    VALUES ('$name','$email','$phone','$date1', '$date2', '$pesan')";

    //echo "Query = ".$strSQL;
    $execStrSQL = mysqli_query($conn, $strSQL);
    if ($execStrSQL) {
?>
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <b>Data Berhasil</b> ditambahkan ke dalam Database
        </div>
<?php        
    }
    else {
?>
        <div class="alert alert-warning alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <b>Data Tidak Berhasil</b> ditambahkan ke dalam Database <br>
            <?php echo "Error: ".$execStrSQL. "<br>".mysqli_error($conn); ?>
        </div>
<?php         
    }
}

?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">        
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-sm-6">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Name" required="">
                    </fieldset>
                  </div>

                  <div class="col-sm-6">
                    <fieldset>
                      <input name="email" type="email" class="form-control" id="email" placeholder="Email" required="">
                    </fieldset>
                  </div>

                  <div class="col-sm-6">
                    <fieldset>
                      <input name="phone" type="text" class="form-control" id="phone" placeholder="Phone" required="">
                    </fieldset>
                  </div>

                  <div class="col-sm-3">
                    <fieldset>
                      <input name="date1" type="text" class="form-control" id="date1" placeholder="From 16.06.2020" required="">
                    </fieldset>
                  </div>

                  <div class="col-sm-3">
                    <fieldset>
                      <input name="date2" type="text" class="form-control" id="date2" placeholder="To 16.06.2020" required="">
                    </fieldset>
                  </div>
                  
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="pesan" rows="6" class="form-control" id="pesan" placeholder="Notes" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Request</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-3">
            <div class="section-heading">
              <h2>Contact Details</h2>
            </div>
            
            <div class="left-content">
              <p>
                <span>Name</span>

                <br>
                <?php 
                  $strSQL = "SELECT * FROM contactdetails"; 
                    $execStrSQL = mysqli_query($conn,$strSQL);

                    if (mysqli_num_rows($execStrSQL) > 0) {
                    while ($row = mysqli_fetch_assoc($execStrSQL)) {
                ?>
                <tr>
                  <td><strong><?= $row["name"] ?></strong></td>
                </tr>
                <?php 
              }
              }
              ?>  

              </p>

              <p>
                <span>Phone</span>

                <br>
                
                <?php 
                  $strSQL = "SELECT * FROM contactdetails"; 
                    $execStrSQL = mysqli_query($conn,$strSQL);

                    if (mysqli_num_rows($execStrSQL) > 0) {
                    while ($row = mysqli_fetch_assoc($execStrSQL)) {
                ?>
                <tr>
                  <td><strong><a href="tel:123-456-789"><?= $row["phone"] ?></strong></a></td>
                </tr>
                <?php 
              }
              }
              ?>  

              </p>

              <p>
                <span>Mobile phone</span>

                <br>
                
                <?php 
                  $strSQL = "SELECT * FROM contactdetails"; 
                    $execStrSQL = mysqli_query($conn,$strSQL);

                    if (mysqli_num_rows($execStrSQL) > 0) {
                    while ($row = mysqli_fetch_assoc($execStrSQL)) {
                ?>
                <tr>
                  <td><strong><a href="tel:91182323434"><?= $row["mobilephone"] ?></strong></a></td>
                </tr>
                <?php 
              }
              }
              ?>  

              </p>

              <p>
                <span>Email</span>

                <br>
                <?php 
                  $strSQL = "SELECT * FROM contactdetails"; 
                    $execStrSQL = mysqli_query($conn,$strSQL);

                    if (mysqli_num_rows($execStrSQL) > 0) {
                    while ($row = mysqli_fetch_assoc($execStrSQL)) {
                ?>
                <tr>
                  <td><strong><a href="mailto:sabrina@gmail.com"><?= $row["email"] ?></strong></a></td>
                </tr>
                <?php 
              }
              }
              ?>  

              </p>
            
              <div class="contact-form">
                <button type="submit" class="filled-button">Request Details</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

          <div class="col-md-12">
            <div class="section-heading">
              <h2>Booking terms</h2>
            </div>
            <ul class="featured-list">
                <li>- Tarif ditawarkan berdasarkan periode menginap Anda dan dapat berubah jika Anda mengubah tanggal kedatangan dan/atau keberangkatan Anda. Tarif yang disebutkan adalah dalam Dolar Singapura. Tarif berlaku untuk jumlah orang dewasa yang disebutkan hanya pada saat pemesanan. Biaya tambahan berlaku untuk setiap orang dewasa tambahan. Tarif dikenakan 10% Biaya Layanan dan Pajak Pertambahan Nilai yang berlaku.</li>
                <li><br>- Perubahan tarif akan berlaku jika Anda memutuskan untuk menginap di kategori kamar yang lebih tinggi daripada kategori kamar yang dipesan sebelumnya. Semua layanan yang tidak termasuk dalam paket penawaran hotel atau dalam tarif kamar Anda akan dikenakan biaya secara terpisah.</br></li>
                <li><br>- Perpanjangan masa inap akan dikenakan biaya berdasarkan tarif kamar atau tarif yang berlaku yang ditetapkan dalam paket penawaran hotel MBS Anda.</br></li>
                <li><br>- Kartu kredit yang valid diperlukan untuk menjamin reservasi Anda. Saat melakukan pemesanan, kartu kredit Anda akan dibebankan biaya yang ditunjukkan pada laman dan email konfirmasi pemesanan. MBS menerima kartu kredit Visa, MasterCard, American Express, China Union Pay, JCB, dan Diners Club. Kartu Debit tidak dapat digunakan.</br></li>
              </ul>
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
