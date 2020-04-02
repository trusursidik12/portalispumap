
<!-- ======= Hero Section ======= -->
<section id="hero" style="background-image: url(<?= base_url() ?>assets/frontend/assets/img/hero-bg.jpg);">
  <div class="hero-container" data-aos="fade-up">
    <h1>Ispumap.id</h1>
    <h2>Real Sensoring, Real Measurement, Real Air Pollution Map</h2>
    <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="row no-gutters">
        <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
          <div class="content">
            <h3>Ispumap.id Apps</h3>
            <p>
              Kini kamu bisa mengetahui polusi udara disekitarmu, ayo download aplikasi Ispumap.id
            </p>
            <a href="https://play.google.com/store/search?q" target="_blank" class="about-btn">Download Apps <i class="bx bx-chevron-right"></i></a>
          </div>
        </div>
        <div class="col-xl-7 d-flex justify-content-center">
          <div class="icon-boxes d-flex flex-column">
            <div class="row">
              <div class="col-md-12 icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="content">
                  <i class="bx bx-receipt"></i>
                  <h4>Data Polusi Berdasarkan Provinsi</h4>
                  <p>Data Polusi Berdasarkan Provinsi di Indonesia<br>dalam kondisi data saat ini</p>
                  <a href="<?= site_url('pages/provinsi') ?>" class="about-btn">Semua Provinsi <i class="bx bx-chevron-right"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End .content-->
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- ======= Cta Section ======= -->
  <section id="ranking" class="cta">
    <div class="container" data-aos="zoom-in">

      <div class="text-center">
        <h3>Ranking</h3>
        <p> Ranking PM10, PM25, SO2, CO, O3, NO2.</p>
        <a class="cta-btn" href="<?= site_url('pages/ranking') ?>">Semua Ranking</a>
      </div>

    </div>
  </section><!-- End Cta Section -->

  <!-- ======= Services Section ======= -->
  <section id="services" class="services" style="margin-bottom: -200px;">
    <div class="container">

      <div class="section-title" style="margin-bottom: -70px;">
        <h2>News</h2>
      </div>

      <div id="colorlib-blog">
        <div class="container">
          <div class="row text-center">
            <h2 class="bold">News</h2>
          </div>
          <div class="row row-pb-md">

            <?php foreach(array_slice($news, 0, 3) as $newsdata) : ?>
              <div class="col-md-4">
                <div class="article animate-box">
                  <a href="<?= site_url('pages/news/'.$newsdata['slug']) ?>" class="blog-img">
                    <img class="img-responsive" src="<?= $newsdata['image'] ?>" alt="html5 bootstrap by colorlib.com">
                    <div class="overlay"></div>
                    <div class="link">
                      <span class="read">Read more</span>
                    </div>
                  </a>
                  <div class="desc">
                    <span class="meta"><?= date('d-m-Y', strtotime($newsdata['created_at'])) ?></span>
                    <h2><a href="<?= site_url('pages/news/'.$newsdata['slug']) ?>"><?= $newsdata['title'] ?></a></h2>
                                <p><?= substr($newsdata['content'], 0, 100) ?></p>
                  </div>
                </div>
              </div>
            <?php endforeach ?>

          </div>
        </div>
      </div>

    </div>
  </section><!-- End Services Section -->

  <!-- ======= Contact Section ======= -->
  <section id="contact" class="contact section-bg">
    <div class="container">

      <div class="section-title" data-aos="fade-in" data-aos-delay="100">
        <h2>Contact</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-6">
          <div class="info-box mb-4">
            <i class="bx bx-map"></i>
            <h3>Our Address</h3>
            <p>A108 Adam Street, New York, NY 535022</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-envelope"></i>
            <h3>Email Us</h3>
            <p>contact@example.com</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6">
          <div class="info-box  mb-4">
            <i class="bx bx-phone-call"></i>
            <h3>Call Us</h3>
            <p>+1 5589 55488 55</p>
          </div>
        </div>

      </div>

      <div class="row" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-6 ">
          <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->