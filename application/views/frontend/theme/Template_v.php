
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta property="og:title" content="Template Monster Admin Template">
    <meta property="og:description" content="brevis, barbatus clabulares aliquando convertam de dexter, peritus capio. devatio clemens habitio est.">
    <meta property="og:image" content="http://digipunk.netii.net/images/radar.gif">
    <meta property="og:url" content="http://digipunk.netii.net">
    <link rel="icon" href="<?= base_url('assets/frontend/images/favicon.ico'); ?>" type="<?= base_url('assets/frontend/image/x-icon'); ?>">    
    <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/frontend/components/base/base.css">
    <script type='text/javascript' src="<?= base_url() ?>assets/frontend/components/base/core.js"></script>
    <script type='text/javascript' src="<?= base_url() ?>assets/frontend/components/base/script.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>components/custom/custom.css">
    <!-- <link rel="stylesheet" type="text/css" href="<?= base_url()?>components/custom/custom2.css"> --> 
    <!-- <link rel="stylesheet" type="text/css" href="<?= base_url()?>components/custom/weather.css"> -->
  <body>
    <div class="page">
      <!--RD Navbar-->
      <header class="section rd-navbar-wrap" data-preset='{"title":"Navbar Default","category":"header","reload":true,"id":"navbar-default"}'>
        <nav class="rd-navbar">
          <div class="navbar-container">
            <div class="navbar-cell">
              <div class="navbar-panel">
                <button class="navbar-switch int-hamburger novi-icon" data-multi-switch='{"targets":".rd-navbar","scope":".rd-navbar","isolate":"[data-multi-switch]"}'></button>
                <div class="navbar-logo"><a class="navbar-logo-link" href="<?= base_url() ?>"><img style="position: relative; max-width: 100% ; max-height: 50px; object-fit: contain;" class="navbar-logo-default" src="<?= base_url(); ?>assets/frontend/images/logo_ispumap.png" alt="Intense"/>
                	<img class="navbar-logo-inverse" alt="Intense" width="50px" height="85px"/></a></div>
              </div>
            </div>
            <div class="navbar-cell navbar-spacer"></div>
            <div class="navbar-cell navbar-sidebar">
            <div class="navbar-cell navbar-sidebar">
            <div class="navbar-cell navbar-sidebar">
              <ul class="navbar-navigation rd-navbar-nav">
                <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link" href="<?= base_url() ?>">Home</a>
                </li>  
                <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link" href="#">Features</a>
                  <div class="navbar-navigation-megamenu rd-navbar-megamenu">
                    <div class="navbar-navigation-megamenu-container">
                      <div class="navbar-navigation-back">
                        <button class="navbar-navigation-back-btn">Back</button>
                      </div>
                      <div class="navbar-navigation-megamenu-row">
                    	<ul class="navbar-navigation-megamenu-column" style="flex-basis: 35%;">
                          <li class="navbar-navigation-banner"><a href="#" target="_blank"><img src="<?= base_url(); ?>assets/frontend/images/banners/monas_landmark.png" alt="" width="450px" height="360px"/></a>
                          	<br><p style ="text-align:center">Decision</p></li>
                        </ul>
                       <ul class="navbar-navigation-megamenu-column" style="flex-basis: 35%;">
                          <li class="navbar-navigation-banner"><a href="#" target="_blank"><img src="<?= base_url(); ?>assets/frontend/images/banners/maps_indonesia.png" alt="" width="450px" height="360px"/></a>
                          <br><p style ="text-align:center">Maps</p></li>
                        </ul>
                        <ul class="navbar-navigation-megamenu-column" style="flex-basis: 35%;">
                          <li class="navbar-navigation-banner"><a href="#" target="_blank"><img src="<?= base_url(); ?>assets/frontend/images/banners/banner-01-620x360.png" alt="" width="450px" height="360px"/></a>
                          <br><p style ="text-align:center">Detail Kota</p></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link" href="#">Profile</a>
                  <!-- <ul class="navbar-navigation-dropdown rd-navbar-dropdown"> -->
                    <!-- <li class="navbar-navigation-back">
                      <button class="navbar-navigation-back-btn">Back</button>
                    </li> -->
                    <!-- <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Decision</a>
                      <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                        <li class="navbar-navigation-back">
                          <button class="navbar-navigation-back-btn">Back</button>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="revolution-parallax-zoom-slices.html">Parallax Zoom Slices</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="revolution-crossfade.html">Crossfade</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="revolution-fade-through.html">Fade through</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="revolution-slide.html">Slide</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="revolution-overlay.html">Overlay</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="revolution-slots-zoom.html">Slots Zoom</a>
                        </li>
                      </ul>
                    </li>
                    <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Maps</a>
                      <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                        <li class="navbar-navigation-back">
                          <button class="navbar-navigation-back-btn">Back</button>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="fullcalendar.html">Fullcalendar</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="parallax.html">Parallax</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="vide.html">Vide</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="rd-navbar.html">RD Navbar</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item navbar-navigation-item-disabled"><a class="navbar-navigation-dropdown-link" href="rd-twitter-feed.html">RD Twitter Feed</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item navbar-navigation-item-disabled"><a class="navbar-navigation-dropdown-link" href="rd-flickr-gallery.html">RD Flickr Gallery</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="rd-mailform.html">RD Mailform</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="google-recaptcha.html">Google ReCaptcha</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="subscribe-2.html">Mailchimp & Campaign Monitor</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="charts-&amp;-graphs.html">Charts & Graphs</a>
                        </li>
                      </ul>
                    </li>
                    <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Detail Kota</a>
                      <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                        <li class="navbar-navigation-back">
                          <button class="navbar-navigation-back-btn">Back</button>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="header-default.html">Default</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="header-consulting.html">Consulting</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="header-business.html">Business</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="header-studio.html">Studio</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="header-app.html">Application</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="header-event.html">Event</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="header-blog.html">Blog</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="header-store.html">Store</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="header-minimal.html">Minimal</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item navbar-navigation-item-disabled"><a class="navbar-navigation-dropdown-link" href="header-portfolio.html">Portfolio <span class="badge badge-warning">soon</span></a>
                        </li>
                      </ul>
                    </li> 
                    <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="footers.html">Footers</a>
                    </li>
                    <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="ui-kit.html">Advanced UI Kit</a>
                    </li> -->
                  <!-- </ul> -->
                </li>
                <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link" href="#">News</a>
                  <div class="navbar-navigation-megamenu rd-navbar-megamenu navbar-dark">
                    <div class="navbar-navigation-megamenu-container">
                      <div class="navbar-navigation-back">
                        <button class="navbar-navigation-back-btn">Back</button>
                      </div>
                      <h5 class="navbar-navigation-megamenu-heading">Pages</h5>
                      <div class="navbar-navigation-megamenu-row">
                        <ul class="navbar-navigation-megamenu-column">
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="about-us.html">About us</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="about-us-2.html">About us 2</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="about-me.html">About me</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="about-me-2.html">About me 2</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="services.html">Services</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="our-team.html">Our team</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="our-team-2.html">Our team 2</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="team-member.html">Team member</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="team-member-2.html">Team member 2</a>
                          </li>
                        </ul>
                        <ul class="navbar-navigation-megamenu-column">
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="careers.html">Careers</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="faq.html">FAQ</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="faq-2.html">FAQ 2</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="faq-3.html">FAQ 3</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="faq-4.html">FAQ 4</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="contact-me.html">Contact me</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="contact-us.html">Contact us</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="contact-us-2.html">Contact us 2</a>
                          </li>
                        </ul>
                        <ul class="navbar-navigation-megamenu-column">
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="get-in-touch.html">Get in touch</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="contact-us-3.html">Contact us 3</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="subscribe.html">Subscribe</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="sitemap.html">Sitemap</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="coming-soon.html">Coming soon</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="search-results.html">Search results</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="login.html">Login</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="register.html">Register</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="login-register.html">Login / Register</a>
                          </li>
                        </ul>
                        <ul class="navbar-navigation-megamenu-column">
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="pricing.html">Pricing</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="appointment.html">Appointment</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="appointment-calendar.html">Appointment calendar</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="maintenance.html">Maintenance</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="clients.html">Clients</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="under-construction.html">Under construction</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="404-page.html">404 page</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="503-page.html">503 page</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="privacy-policy.html">Privacy policy</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link" href="#">FAQ</a>
                  <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                    <li class="navbar-navigation-back">
                      <button class="navbar-navigation-back-btn">Back</button>
                    </li>
                    <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Grid layout</a>
                      <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                        <li class="navbar-navigation-back">
                          <button class="navbar-navigation-back-btn">Back</button>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="portfolio-grid-horizontal.html">Horizontal</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="portfolio-grid-vertical.html">Vertical</a>
                        </li>
                      </ul>
                    </li>
                    <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Masonry layout</a>
                      <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                        <li class="navbar-navigation-back">
                          <button class="navbar-navigation-back-btn">Back</button>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="portfolio-masonry-horizontal.html">Horizontal</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="portfolio-masonry-vertical.html">Vertical</a>
                        </li>
                      </ul>
                    </li>
                    <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Wide layout</a>
                      <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                        <li class="navbar-navigation-back">
                          <button class="navbar-navigation-back-btn">Back</button>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="portfolio-wide-horizontal.html">Horizontal</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="portfolio-wide-vertical.html">Vertical</a>
                        </li>
                      </ul>
                    </li>
                    <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Fullwidth layout</a>
                      <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                        <li class="navbar-navigation-back">
                          <button class="navbar-navigation-back-btn">Back</button>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="portfolio-fullwidth-3.html">3 columns</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="portfolio-fullwidth-4.html">4 columns</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="portfolio-fullwidth-5.html">5 columns</a>
                        </li>
                      </ul>
                    </li>
                    <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Custom effects</a>
                      <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                        <li class="navbar-navigation-back">
                          <button class="navbar-navigation-back-btn">Back</button>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="portfolio-bella.html">Bella effect</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="portfolio-connor.html">Connor effect</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="portfolio-frode.html">Frode effect</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="portfolio-janes.html">Janes effect</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="portfolio-josip.html">Josip effect</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="portfolio-mike.html">Mike effect</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="portfolio-tamaz.html">Tamaz effect</a>
                        </li>
                      </ul>
                    </li>
                    <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Single project</a>
                      <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                        <li class="navbar-navigation-back">
                          <button class="navbar-navigation-back-btn">Back</button>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="portfolio-single-1.html">Default</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="portfolio-single-2.html">Variant 2</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="portfolio-single-3.html">Variant 3</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <!-- <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link" href="#">F.A.Q</a>
                  <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                    <li class="navbar-navigation-back">
                      <button class="navbar-navigation-back-btn">Back</button>
                    </li>
                    <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Blog classic</a>
                      <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                        <li class="navbar-navigation-back">
                          <button class="navbar-navigation-back-btn">Back</button>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="blog-classic-no-sidebar.html">No sidebar</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="blog-classic-with-sidebar.html">With sidebar</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="blog-classic-2-columns.html">2 columns</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="blog-classic-3-columns.html">3 columns</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="blog-classic-creative.html">Creative</a>
                        </li>
                      </ul>
                    </li>
                    <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Blog boxed</a>
                      <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                        <li class="navbar-navigation-back">
                          <button class="navbar-navigation-back-btn">Back</button>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="blog-boxed-no-sidebar.html">No sidebar</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="blog-boxed-with-sidebar.html">With sidebar</a>
                        </li>
                      </ul>
                    </li>
                    <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Blog thumbnail</a>
                      <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                        <li class="navbar-navigation-back">
                          <button class="navbar-navigation-back-btn">Back</button>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="blog-thumbnail-no-sidebar.html">No sidebar</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="blog-thumbnail-with-sidebar.html">With sidebar</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="blog-thumbnail-2-columns.html">2 columns</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="blog-thumbnail-creative.html">Creative</a>
                        </li>
                      </ul>
                    </li>
                    <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Blog modern</a>
                      <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                        <li class="navbar-navigation-back">
                          <button class="navbar-navigation-back-btn">Back</button>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="blog-modern-no-sidebar.html">No sidebar</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="blog-modern-with-sidebar.html">With sidebar</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="blog-modern-rounded.html">Rounded</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="blog-modern-2-columns.html">2 columns</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="blog-modern-large.html">Large layout</a>
                        </li>
                      </ul>
                    </li>
                    <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="blog-dated.html">Blog dated</a>
                    </li>
                    <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Blog hover</a>
                      <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                        <li class="navbar-navigation-back">
                          <button class="navbar-navigation-back-btn">Back</button>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="blog-hover-2-columns.html">2 columns</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="blog-hover-3-columns.html">3 columns</a>
                        </li>
                      </ul>
                    </li>
                    <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="blog-creative.html">Blog creative</a>
                    </li>
                    <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Blog post</a>
                      <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                        <li class="navbar-navigation-back">
                          <button class="navbar-navigation-back-btn">Back</button>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="post.html">No sidebar</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="post-with-sidebar.html">With sidebar</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="post-intro.html">Intro</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </li> -->
                <!-- <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link" href="#">Shop</a>
                  <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                    <li class="navbar-navigation-back">
                      <button class="navbar-navigation-back-btn">Back</button>
                    </li>
                    <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Grid view</a>
                      <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                        <li class="navbar-navigation-back">
                          <button class="navbar-navigation-back-btn">Back</button>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="grid-shop-no-sidebar.html">No sidebar</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="grid-shop-left-sidebar.html">Left sidebar</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="grid-shop-right-sidebar.html">Right sidebar</a>
                        </li>
                      </ul>
                    </li>
                    <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">List view</a>
                      <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                        <li class="navbar-navigation-back">
                          <button class="navbar-navigation-back-btn">Back</button>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="list-shop-left-sidebar.html">Left sidebar</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="list-shop-right-sidebar.html">Right sidebar</a>
                        </li>
                      </ul>
                    </li>
                    <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="#">Single product</a>
                      <ul class="navbar-navigation-dropdown rd-navbar-dropdown">
                        <li class="navbar-navigation-back">
                          <button class="navbar-navigation-back-btn">Back</button>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="product-page.html">Product page</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="product-page-2.html">Product page 2</a>
                        </li>
                        <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="product-page-3.html">Product page 3</a>
                        </li>
                      </ul>
                    </li>
                    <li class="navbar-navigation-dropdown-item"><a class="navbar-navigation-dropdown-link" href="cart.html">Cart</a>
                    </li>
                  </ul>
                </li> -->
                <!-- <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link" href="#">Components</a>
                  <div class="navbar-navigation-megamenu rd-navbar-megamenu navbar-dark">
                    <div class="navbar-navigation-megamenu-container">
                      <div class="navbar-navigation-back">
                        <button class="navbar-navigation-back-btn">Back</button>
                      </div>
                      <h5 class="navbar-navigation-megamenu-heading">Components</h5>
                      <div class="navbar-navigation-megamenu-row">
                        <ul class="navbar-navigation-megamenu-column">
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="typography.html">Typography</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="buttons.html">Buttons</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="counters.html">Counters</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="dividers.html">Dividers</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="form-elements.html">Form elements</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="icons.html">Icons</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="infographics.html">Infographics</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="badges.html">Badges</a>
                          </li>
                        </ul>
                        <ul class="navbar-navigation-megamenu-column">
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="tables.html">Tables</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="tabs.html">Tabs</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="breadcrumbs.html">Breadcrumbs</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="accordions.html">Accordions</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="thumbnails.html">Thumbnails</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="alerts.html">Alerts</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="testimonials.html">Testimonials</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="countdowns.html">Countdowns</a>
                          </li>
                        </ul>
                        <ul class="navbar-navigation-megamenu-column">
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="blurbs.html">Blurbs</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="persons.html">Persons</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="pricing-and-plans.html">Pricing and plans</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="pagination.html">Pagination</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="comments.html">Comments</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="lists.html">Lists</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="grid-system.html">Grid system</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="calls-to-action.html">Calls to action</a>
                          </li>
                        </ul>
                        <ul class="navbar-navigation-megamenu-column">
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="posts.html">Posts</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="widgets.html">Widgets</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="maps.html">Maps</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="offer-boxes.html">Offer boxes</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="media-elements.html">Media elements</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="text-rotator.html">Text rotator</a>
                          </li>
                          <li class="navbar-navigation-megamenu-item"><a class="navbar-navigation-megamenu-link" href="animations.html">Animations</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </li> -->
              </ul>
            </div>
            <div class="navbar-cell">
              <div class="navbar-subpanel">
                <div class="navbar-subpanel-item">
                  <div class="navbar-search">
                    <div class="navbar-search-container">
                      <form class="navbar-search-form" action="search-results.html" method="GET" data-rd-search='{"output":".navbar-search-results","mode":"live","liveResults":3,"template":"<h5 class=\"search-title\"><a target=\"_top\" href=\"#{href}\" class=\"search-link\">#{title}</a></h5><p>...#{token}...</p>"}'>
                        <input class="navbar-search-input" type="text" placeholder="Cari Provinsi atau Kota..." autocomplete="on" name="s"/>
                        <button class="navbar-search-btn int-search novi-icon"></button>
                        <button class="navbar-search-close search-switch int-close novi-icon" type="button" data-multi-switch='{"targets":".rd-navbar","scope":".rd-navbar","class":"navbar-search-active","isolate":"[data-multi-switch]:not(.search-switch)"}'></button>
                      </form>
                    </div>
                  </div>
                  <div class="navbar-search-results">No results</div>
                  <button class="navbar-button search-switch int-search novi-icon" data-multi-switch='{"targets":".rd-navbar","scope":".rd-navbar","class":"navbar-search-active","isolate":"[data-multi-switch]:not(.search-switch)"}'></button>
                </div>
                <div class="navbar-subpanel-item">
                  <button class="navbar-button int-cart novi-icon" data-multi-switch='{"targets":".rd-navbar","scope":".rd-navbar","class":"navbar-cart-active","isolate":"[data-multi-switch]"}'></button>
                  <div class="navbar-cart">
                    <h5 class="navbar-cart-heading">Shopping cart</h5>
                    <div class="navbar-cart-item">
                      <div class="navbar-cart-item-left"><a class="thumbnail-small" href="product-page.html"><img src="<?= base_url(); ?>assets/frontend/images/products/product-03-80x103.jpg" alt="" width="80" height="103"/></a></div>
                      <div class="navbar-cart-item-body"><a class="navbar-cart-item-heading" href="product-page.html">Ombré vinyl backpack</a>
                        <div class="navbar-cart-item-price">$29</div>
                        <div class="navbar-cart-item-parameter">Size: S</div>
                        <div class="navbar-cart-item-parameter">Color: Black</div>
                        <div class="navbar-cart-item-parameter">Dimension: 80X120mm</div>
                        <div class="navbar-cart-item-parameter">Qty:
                          <input class="form-control navbar-cart-item-qty" type="number" value="1" name="qty" data-spinner='{"classes":{"ui-spinner":"navbar-cart-spinner"}}'/>
                        </div>
                      </div>
                      <div class="navbar-cart-item-right">
                        <button class="navbar-cart-remove int-trash novi-icon"></button>
                      </div>
                    </div>
                    <div class="navbar-cart-item">
                      <div class="navbar-cart-item-left"><a class="thumbnail-small" href="product-page.html"><img src="<?= base_url(); ?>assets/frontend/images/products/product-08-80x103.jpg" alt="" width="80" height="103"/></a></div>
                      <div class="navbar-cart-item-body"><a class="navbar-cart-item-heading" href="product-page.html">Phone case with chain</a>
                        <div class="navbar-cart-item-price">$34</div>
                        <div class="navbar-cart-item-parameter">Size: S</div>
                        <div class="navbar-cart-item-parameter">Color: Red</div>
                        <div class="navbar-cart-item-parameter">Dimension: 80X120mm</div>
                        <div class="navbar-cart-item-parameter">Qty:
                          <input class="form-control navbar-cart-item-qty" type="number" value="1" name="qty" data-spinner='{"classes":{"ui-spinner":"navbar-cart-spinner"}}'/>
                        </div>
                      </div>
                      <div class="navbar-cart-item-right">
                        <button class="navbar-cart-remove int-trash novi-icon"></button>
                      </div>
                    </div>
                    <div class="navbar-cart-line">
                      <div class="navbar-cart-line-name">Subtotal:</div>
                      <div class="navbar-cart-line-value">$63.00</div>
                    </div>
                    <div class="navbar-cart-line">
                      <div class="navbar-cart-line-name">Shipping:</div>
                      <div class="navbar-cart-line-value">Free</div>
                    </div>
                    <div class="navbar-cart-line">
                      <div class="navbar-cart-line-name">Taxes:</div>
                      <div class="navbar-cart-line-value">$0.00</div>
                    </div>
                    <div class="navbar-cart-line">
                      <div class="navbar-cart-line-name">Total:</div>
                      <div class="navbar-cart-total">$63</div>
                    </div>
                    <div class="navbar-cart-buttons">
                      <div class="navbar-cart-group"><a class="btn btn-dark btn-sm" href="list-shop-right-sidebar.html">Continue shopping</a><a class="btn btn-primary btn-sm" href="cart.html"><span class="btn-icon int-check novi-icon"></span><span>Checkout</span></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </header>
      <!-- Intro-->
      <?= $contentsfrontend; ?>
      <!-- Footer default extended-->
      <footer class="section footer bg-800 text-400 context-dark novi-background" data-preset='{"title":"Footer Extended","category":"footer","reload":false,"id":"footer-extended"}'>
        <div class="container">
          <div class="row justify-content-center novi-disabled">
            <div class="col-sm-11 col-md-9 col-lg-7 col-xl-6 text-center">
              <h2>
                Discover the latest trends in<br class="d-none d-xs-block">
                web design and development
              </h2>
              <p>Trying to stay on top of it all? Get the best tools, resources and inspiration sent to your inbox weekly.</p>
              <form class="rd-mailform form-inline justify-content-center group-20 novi-disabled" data-form-output="footer-extended-form-output" data-form-type="subscribe" method="post" action="<?= base_url(); ?>components/rd-mailform/rd-mailform.php">
                <div class="form-inline-group">
                  <input class="form-control" type="email" name="email" placeholder="Enter your email address" data-constraints="@Email @Required">
                </div>
                <button class="btn btn-lg btn-primary" type="submit">Subscribe</button>
              </form>
              <div class="form-output snackbar snackbar-secondary" id="footer-extended-form-output"></div>
            </div>
          </div>
          <div class="row row-40">
            <div class="col-xl-6">
              <!--{DEL DIST BUILDER}-->
              <!-- TODO генерация из навигации-->
              <!--{DEL}-->
              <h6>Pages</h6>
              <ul class="list footer-list small font-weight-normal">
                <li class="list-item"><a class="list-link" href="404-page.html">404 page</a></li>
                <li class="list-item"><a class="list-link" href="503-page.html">503 page</a></li>
                <li class="list-item"><a class="list-link" href="about-us.html">About us</a></li>
                <li class="list-item"><a class="list-link" href="about-us-2.html">About us 2</a></li>
                <li class="list-item"><a class="list-link" href="about-me.html">About me</a></li>
                <li class="list-item"><a class="list-link" href="about-me-2.html">About me 2</a></li>
                <li class="list-item"><a class="list-link" href="services.html">Services</a></li>
                <li class="list-item"><a class="list-link" href="our-team.html">Our team</a></li>
                <li class="list-item"><a class="list-link" href="our-team-2.html">Our team 2</a></li>
                <li class="list-item"><a class="list-link" href="team-member.html">Team member</a></li>
                <li class="list-item"><a class="list-link" href="team-member-2.html">Team member 2</a></li>
                <li class="list-item"><a class="list-link" href="careers.html">Careers</a></li>
                <li class="list-item"><a class="list-link" href="faq.html">FAQ</a></li>
                <li class="list-item"><a class="list-link" href="faq-2.html">FAQ 2</a></li>
                <li class="list-item"><a class="list-link" href="faq-3.html">FAQ 3</a></li>
                <li class="list-item"><a class="list-link" href="faq-4.html">FAQ 4</a></li>
                <li class="list-item"><a class="list-link" href="contact-me.html">Contact me</a></li>
                <li class="list-item"><a class="list-link" href="contact-us.html">Contact us</a></li>
                <li class="list-item"><a class="list-link" href="contact-us-2.html">Contact us 2</a></li>
                <li class="list-item"><a class="list-link" href="contact-us-3.html">Contact us 3</a></li>
                <li class="list-item"><a class="list-link" href="get-in-touch.html">Get in touch</a></li>
                <li class="list-item"><a class="list-link" href="subscribe.html">Subscribe</a></li>
                <li class="list-item"><a class="list-link" href="sitemap.html">Sitemap</a></li>
                <li class="list-item"><a class="list-link" href="coming-soon.html">Coming soon</a></li>
                <li class="list-item"><a class="list-link" href="search-results.html">Search results</a></li>
                <li class="list-item"><a class="list-link" href="login.html">Login</a></li>
                <li class="list-item"><a class="list-link" href="register.html">Register</a></li>
                <li class="list-item"><a class="list-link" href="pricing.html">Pricing</a></li>
                <li class="list-item"><a class="list-link" href="appointment.html">Appointment</a></li>
                <li class="list-item"><a class="list-link" href="appointment-calendar.html">Appointment 2</a></li>
                <li class="list-item"><a class="list-link" href="maintenance.html">Maintenance</a></li>
                <li class="list-item"><a class="list-link" href="clients.html">Clients</a></li>
                <li class="list-item"><a class="list-link" href="under-construction.html">Under construction</a></li>
                <li class="list-item"><a class="list-link" href="privacy-policy.html">Privacy policy</a></li>
              </ul>
            </div>
            <div class="col-xl-6">
              <h6>Components</h6>
              <ul class="list footer-list small font-weight-normal">
                <li class="list-item"><a class="list-link" href="accordions.html">Accordions</a></li>
                <li class="list-item"><a class="list-link" href="alerts.html">Alerts</a></li>
                <li class="list-item"><a class="list-link" href="animations.html">Animations</a></li>
                <li class="list-item"><a class="list-link" href="breadcrumbs.html">Breadcrumbs</a></li>
                <li class="list-item"><a class="list-link" href="buttons.html">Buttons</a></li>
                <li class="list-item"><a class="list-link" href="calls-to-action.html">Calls to action</a></li>
                <li class="list-item"><a class="list-link" href="comments.html">Comments</a></li>
                <li class="list-item"><a class="list-link" href="offer-boxes.html">Offer boxes</a></li>
                <li class="list-item"><a class="list-link" href="counters.html">Counters</a></li>
                <li class="list-item"><a class="list-link" href="dividers.html">Dividers</a></li>
                <li class="list-item"><a class="list-link" href="widgets.html">Widgets</a></li>
                <li class="list-item"><a class="list-link" href="form-elements.html">Form elements</a></li>
                <li class="list-item"><a class="list-link" href="grid-system.html">Grid system</a></li>
                <li class="list-item"><a class="list-link" href="blurbs.html">Blurbs</a></li>
                <li class="list-item"><a class="list-link" href="icons.html">Icons</a></li>
                <li class="list-item"><a class="list-link" href="infographics.html">Infographics</a></li>
                <li class="list-item"><a class="list-link" href="badges.html">Badges</a></li>
                <li class="list-item"><a class="list-link" href="lists.html">Lists</a></li>
                <li class="list-item"><a class="list-link" href="maps.html">Maps</a></li>
                <li class="list-item"><a class="list-link" href="media-elements.html">Media elements</a></li>
                <li class="list-item"><a class="list-link" href="persons.html">Persons</a></li>
                <li class="list-item"><a class="list-link" href="pagination.html">Pagination</a></li>
                <li class="list-item"><a class="list-link" href="posts.html">Posts</a></li>
                <li class="list-item"><a class="list-link" href="pricing-and-plans.html">Pricing and plans</a></li>
                <li class="list-item"><a class="list-link" href="tables.html">Tables</a></li>
                <li class="list-item"><a class="list-link" href="tabs.html">Tabs</a></li>
                <li class="list-item"><a class="list-link" href="testimonials.html">Testimonials</a></li>
                <li class="list-item"><a class="list-link" href="text-rotator.html">Text rotator</a></li>
                <li class="list-item"><a class="list-link" href="thumbnails.html">Thumbnails</a></li>
                <li class="list-item"><a class="list-link" href="countdowns.html">Countdowns</a></li>
                <li class="list-item"><a class="list-link" href="typography.html">Typography</a></li>
              </ul>
            </div>
          </div>
          <hr class="divider footer-divider">
          <div class="row row-30 justify-content-xxl-between novi-disabled">
            <div class="col-lg-5">
                    <!-- Logo-->
                    <div class="logo"><a class="logo-link" href="index.html"><img class="logo-image-default" src="<?= base_url(); ?>assets/frontend/images/logo-default-114x27.svg" alt="Intense" width="114" height="27"/><img class="logo-image-inverse" src="<?= base_url(); ?>assets/frontend/images/logo-inverse-114x27.svg" alt="Intense" width="114" height="27"/></a></div>
              <p class="small">Get the most for your website with Intense Multipurpose Website Template, valued by over 3,000 customers worldwide. With a great number of pages, components, elements, and blocks, this responsive Bootstrap 4 template is definitely worth your attention.</p>
            </div>
            <div class="col-md-11 col-lg-7 col-xxl-6">
              <p class="small">178 West 27th Street, Suite 527, New York NY 10012, United States</p>
              <div class="row row-20 novi-disabled">
                <div class="col-auto col-sm-4">
                  <div class="media media-xxs text-white">
                    <div class="media-left"><span class="icon icon-xs int-phone novi-icon"></span></div>
                    <div class="media-body">
                      <ul class="list list-contact">
                        <li class="list-contact-item"><a class="list-contact-link" href="tel:#">+1 234 567 8901</a></li>
                        <li class="list-contact-item"><a class="list-contact-link" href="tel:#">+1 234 567 8902</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-auto col-sm-4">
                  <ul class="list list-xs small">
                    <li class="list-item">Mon-Fri: 8am - 6pm</li>
                    <li class="list-item">Sat-Sun: 8am - 4pm</li>
                    <li class="list-item">Holidays: closed</li>
                  </ul>
                </div>
                <div class="col-auto col-sm-4">
                  <ul class="list list-lg small text-white">
                    <li class="list-item"><a class="link link-contrast link-secondary" href="mailto:#">mail@example.com</a></li>
                    <li class="list-item"><a class="link link-contrast link-secondary" href="mailto:#">info@example.com</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <hr class="divider footer-divider">
          <div class="row row-15 align-items-center justify-content-between footer-panel novi-disabled">
            <div class="col-auto">
                    <!-- Copyright-->
                    <p class="rights"><span>&copy; 2019&nbsp;</span><span>Intense</span><span>. All rights reserved.&nbsp;</span><a class="rights-link" href="privacy-policy.html">Privacy Policy</a></p>
            </div>
            <div class="col-auto">
              <div class="group-30 d-flex align-items-center text-white"><a class="icon icon-xs icon-social int-youtube novi-icon" href="#"></a><a class="icon icon-xs icon-social int-facebook novi-icon" href="#"></a><a class="icon icon-xs icon-social int-instagram novi-icon" href="#"></a><a class="icon icon-xs icon-social int-twitter novi-icon" href="#"></a><a class="icon icon-xs icon-social int-linkedin novi-icon" href="#"></a></div>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>