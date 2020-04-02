<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ispumap.id</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url() ?>assets/frontend/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url() ?>assets/frontend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https:/fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>assets/frontend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/frontend/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/frontend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/frontend/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/frontend/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/frontend/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>assets/frontend/assets/css/style.css" rel="stylesheet">

  <!-- Animate.css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/assets/vendor/css/animate.css">
  <!-- Style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/assets/vendor/css/styleblog.css">

  <!-- js -->
  <!-- <script src="<?= base_url() ?>assets/frontend/assets/js/jquery-2.2.4.min.js"></script> -->
  <script src="<?= base_url() ?>assets/frontend/assets/vendor/js/jquery.min.js"></script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex">

      <div class="logo mr-auto">
        <a href="<?= site_url() ?>"><img src="<?= base_url() ?>assets/frontend/assets/img/logo/ispumap.png"></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="<?= base_url() ?>assets/frontend/assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="<?=$this->uri->uri_string() == '' ? 'active' : '' ?>">
            <a href="<?= site_url() ?>">Home</a>
          </li>
          <li class="<?=$this->uri->uri_string() == 'pages/about-us' ? 'active' : '' ?>">
            <a href="<?= site_url('pages/about-us') ?>">About Us</a>
          </li>
          <li class="<?=$this->uri->uri_string() == 'pages/ranking' ? 'active' : '' ?>">
            <a href="<?= site_url('pages/ranking') ?>">Ranking</a>
          </li>
          <li class="<?=$this->uri->uri_string() == 'pages/provinsi' ? 'active' : '' ?>">
            <a href="<?= site_url('pages/provinsi') ?>">Provinsi</a>
          </li>
          <li class="<?=$this->uri->uri_string() == 'pages/news' ? 'active' : '' ?>">
            <a href="<?= site_url('pages/news') ?>">News</a>
          </li>
          <li class="<?=$this->uri->uri_string() == 'pages/contact' ? 'active' : '' ?>">
            <a href="<?= site_url('pages/contact') ?>">Contact Us</a>
          </li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  <?= $contentsfrontend; ?>
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info" data-aos="fade-up" data-aos-delay="50">
              <h3>Squadfree</h3>
              <p class="pb-3"><em>Qui repudiandae et eum dolores alias sed ea. Qui suscipit veniam excepturi quod.</em></p>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="150">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links" data-aos="fade-up" data-aos-delay="250">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter" data-aos="fade-up" data-aos-delay="350">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Squadfree</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>assets/frontend/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/frontend/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url() ?>assets/frontend/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url() ?>assets/frontend/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?= base_url() ?>assets/frontend/assets/vendor/counterup/counterup.min.js"></script>
  <script src="<?= base_url() ?>assets/frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url() ?>assets/frontend/assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?= base_url() ?>assets/frontend/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url() ?>assets/frontend/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>assets/frontend/assets/js/main.js"></script>

  <script src="<?= base_url() ?>assets/frontend/assets/vendor/js/jquery.waypoints.min.js"></script>
  <script src="<?= base_url() ?>assets/frontend/assets/vendor/js/main.js"></script>

</body>

</html>