<?php $i = '' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Rubeka Cafe</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <!-- Icon di atas -->

  <link rel="shortcut icon" type="image/png" href="<?php base_url(); ?>assets/Rubeka_Cafe/images/logo.png" />
  <link rel="stylesheet" href="<?= base_url('assets/bootstrap4/css/bootstrap.min.css') ?>">

  <script type="text/javascript" src="<?= base_url('assets/fontawesome/js/all.min.js') ?>"></script>

  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/myStyle.css') ?>">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

  <link rel="stylesheet" href="<?php base_url(); ?>assets/Rubeka_Cafe/css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="<?php base_url(); ?>assets/Rubeka_Cafe/css/animate.css">

  <link rel="stylesheet" href="<?php base_url(); ?>assets/Rubeka_Cafe/css/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php base_url(); ?>assets/Rubeka_Cafe/css/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php base_url(); ?>assets/Rubeka_Cafe/css/magnific-popup.css">

  <link rel="stylesheet" href="<?php base_url(); ?>assets/Rubeka_Cafe/css/aos.css">

  <link rel="stylesheet" href="<?php base_url(); ?>assets/Rubeka_Cafe/css/ionicons.min.css">

  <link rel="stylesheet" href="<?php base_url(); ?>assets/Rubeka_Cafe/css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="<?php base_url(); ?>assets/Rubeka_Cafe/css/jquery.timepicker.css">


  <link rel="stylesheet" href="<?php base_url(); ?>assets/Rubeka_Cafe/css/flaticon.css">
  <link rel="stylesheet" href="<?php base_url(); ?>assets/Rubeka_Cafe/css/icomoon.css">
  <link rel="stylesheet" href="<?php base_url(); ?>assets/Rubeka_Cafe/css/style.css">
</head>

<?php
$hal = $this->uri->segment(2);
$aktif = 'active';
?>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container-fluid">

      <!-- Ganti Teks Coffee Blend dengan Logo -->
      <a class="navbar-brand" href="<?php base_url(); ?>" style="margin-right: 10%; padding-right: 15%;">
        <img src="<?php base_url(); ?>assets/Rubeka_Cafe/images/logo.png" class="rubeka_cafe" style="width: 90px;"
          alt="Logo Coffee Rubeka">
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active" style="width: max-content;"><a class="nav-link" href="<?= base_url($i . '') ?>"
              id="1"> Home</a></li>
          <li class="nav-item" style="width: max-content;"><a class="nav-link" href="<?= base_url($i . '/menu') ?>">Drink &
              Food</a></li>
          <li class="nav-item" style="width: max-content;"><a class="nav-link"
              href="<?= base_url($i . '/gallery') ?>">Gallery</a></li>
          <li class="nav-item" style="width: max-content;"><a class="nav-link"
              href="<?= base_url($i . '/contact') ?>">Contact</a></li>
          <li class="nav-item" style="width: max-content;"><a class="nav-link" href="<?= base_url($i . '/cart') ?>">cart</a>
          </li>
          <li class="nav-item" style="width: max-content;"><a class="nav-link" href="<?= base_url($i . '/news') ?>">News</a>
          </li>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="loading-overlay">
    <img src="<?= base_url('assets/Rubeka_Cafe/images/logo.png') ?>" alt="Coffee Logo" class="loading-logo">
  </div>
  <link rel="stylesheet" href="<?= base_url('assets/navbar.css') ?>">
  <script src="<?= base_url('assets/navbar.js') ?>" defer></script>



  <!-- END nav -->

  <?php
  if (!defined('BASEPATH'))
    exit('No direct script access allowed');
  if ($content) {
    $this->load->view($content);
  }
  ?>


  <!-- FOOTER -->
  <div id="footer">
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-4 left mb-5">
            <a class="navbar-brand font-weight-bold" href="<?= base_url($i . 'user/') ?>"><img
                src="<?php echo base_url(); ?>assets/Rubeka_Cafe/images/logo.png"  alt="" width=120px
                height="70px"></a><br>
            <a href="<?= base_url($i . 'user/') ?>">Home</a> - <a href="<?= base_url($i . 'user/menu') ?>">Drink & Food</a> - <a
              href="<?= base_url($i . 'user/gallery') ?>">Gallery</a> - <a
              href="<?= base_url($i . 'user/contact') ?>">Contact</a> <br>
            <div class="mt-3">&copy Kelompok 7 3SIMA</div>
          </div>
          <div class="col-lg-4 col-md-6 center">
            <div>
              <i class="fa fa-map-marker-alt"></i> Ruko Imperium B25-26 Batam <br>
            </div>
            <div>
              <i class="far fa-envelope"></i> RubekaCafe@gmail.com <br>
            </div>
            <div>
              <i class="fas fa-phone"></i> +62 878 4199 0650
            </div>
          </div>
          <div class="col-lg-4 col-md-6 right mt-3 mb-3">
            <div class="brand">Social Media</div>
            <div class="icon ">
              <a href="https://www.instagram.com/rubekacoffeeshop/?hl=en" class="mr-3">
                <i class="fab fa-facebook-square "></i>
              </a>
              <a href="https://www.instagram.com/rubekacoffeeshop/?hl=en" class="mr-3">
                <i class="fab fa-twitter-square "></i>
              </a>
              <a href="https://www.instagram.com/rubekacoffeeshop/?hl=en" class="mr-3">
                <i class="fab fa-instagram "></i>
              </a>
              <a href="https://www.instagram.com/rubekacoffeeshop/?hl=en" class="mr-3">
                <i class="fab fa-google-plus-square "></i>
              </a>
            </div>
          </div>
        </div>
      </div>

    </footer>
  </div>
  <!-- END FOOTER -->



</body>


<script src="<?= base_url('assets/bootstrap4/jquery-3.3.1.min.js') ?>"></script>
<script src="<?= base_url('assets/bootstrap4/js/bootstrap.min.js') ?>"></script>

<!-- My Script -->
<script src="<?= base_url('assets/myScript.js') ?>"></script>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
    <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
    <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
  </svg></div>

<script src="<?php base_url(); ?>assets/Rubeka_Cafe/js/jquery.min.js"></script>
<script src="<?php base_url(); ?>assets/Rubeka_Cafe/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?php base_url(); ?>assets/Rubeka_Cafe/js/popper.min.js"></script>
<script src="<?php base_url(); ?>assets/Rubeka_Cafe/js/bootstrap.min.js"></script>
<script src="<?php base_url(); ?>assets/Rubeka_Cafe/js/jquery.easing.1.3.js"></script>
<script src="<?php base_url(); ?>assets/Rubeka_Cafe/js/jquery.waypoints.min.js"></script>
<script src="<?php base_url(); ?>assets/Rubeka_Cafe/js/jquery.stellar.min.js"></script>
<script src="<?php base_url(); ?>assets/Rubeka_Cafe/js/owl.carousel.min.js"></script>
<script src="<?php base_url(); ?>assets/Rubeka_Cafe/js/jquery.magnific-popup.min.js"></script>
<script src="<?php base_url(); ?>assets/Rubeka_Cafe/js/aos.js"></script>
<script src="<?php base_url(); ?>assets/Rubeka_Cafe/js/jquery.animateNumber.min.js"></script>
<script src="<?php base_url(); ?>assets/Rubeka_Cafe/js/bootstrap-datepicker.js"></script>
<script src="<?php base_url(); ?>assets/Rubeka_Cafe/js/jquery.timepicker.min.js"></script>
<script src="<?php base_url(); ?>assets/Rubeka_Cafe/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="<?php base_url(); ?>assets/Rubeka_Cafe/js/google-map.js"></script>
<script src="<?php base_url(); ?>assets/Rubeka_Cafe/js/main.js"></script>


<style>
  footer {
    padding-top: 20px;
    /* Tambahkan jarak pada bagian footer */


  }
    


</style>

</html>