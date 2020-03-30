<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>ISPUMAP</title>

    <!-- Favicon  -->
    <link rel="icon" href="<?= base_url() ?>assets/frontend/img/logo-img/icon_ispumap_transparent.png">

    <!-- Style CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/frontend/style.css">
    <style type="text/css">
        .hero-content-height{
            height: 300px;
        }
        .map-top-aligin{
            margin-top: -5px;
        }
        .map-size{
            height: 200px;
        }
        .explore-position{
            padding-left: 100px;
        }
        .map-border{
            border: 1px solid black;
        }
        .map-border-top{
            border-top: 1px solid black;
        }
    </style>
    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="<?= base_url() ?>assets/frontend/js/jquery/jquery-2.2.4.min.js"></script>

</head>

<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div class="preload-content">
            <div id="sonar-load"></div>
        </div>
    </div>
    <!-- Preloader End -->

    <!-- ***** Main Menu Area Start ***** -->
    <div class="mainMenu d-flex align-items-center justify-content-between">
        <!-- Close Icon -->
        <div class="closeIcon">
            <i class="ti-close" aria-hidden="true" style="object-fit: contain;"></i>
        </div>
        <!-- Logo Area -->
        <div class="logo-area">
            <a href="<?= site_url() ?>"><img style="max-width: 100% ; max-height: 40px;" src="<?= base_url() ?>assets/frontend/img/logo-img/portalispumap1.png"></a>
        </div>
        <!-- Nav -->
        <div class="sonarNav wow fadeInUp" data-wow-delay="1s" style="margin-bottom: 100px;">
            <nav>
                <ul>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= site_url() ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('pages/about-us') ?>">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('pages/news') ?>">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('pages/contact') ?>">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('pages/faq') ?>">FAQ</a>
                    </li>
                </ul>
            </nav>
        </div>

    </div>
    <!-- ***** Main Menu Area End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="menu-area d-flex justify-content-between">
                        <!-- Logo Area  -->
                        <div class="logo-area">
                            <a href="<?= site_url() ?>"><img style="max-width: 100% ; max-height: 40px;" src="<?= base_url() ?>assets/frontend/img/logo-img/portalispumap1.png"></a>
                        </div>

                        <div class="menu-content-area d-flex align-items-center">
                            <span class="navbar-toggler-icon" id="menuIcon"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <?= $contentsfrontend; ?>

    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- Copywrite Text -->
                    <div class="copywrite-text">
                        <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- Popper js -->
    <script src="<?= base_url() ?>assets/frontend/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?= base_url() ?>assets/frontend/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="<?= base_url() ?>assets/frontend/js/plugins.js"></script>
    <!-- Active js -->
    <script src="<?= base_url() ?>assets/frontend/js/active.js"></script>
    <!-- api google -->

    <script>
    function myMap() {
    var mapProp= {
      center:new google.maps.LatLng(51.508742,-0.120850),
      zoom:5,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
    }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBoke7YmcL6DQLqWuh62U5y0oKRID90kF4&callback=myMap"></script>

</body>

</html>