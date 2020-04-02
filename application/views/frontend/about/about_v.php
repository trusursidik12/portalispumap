
  <!-- ======= Hero Section ======= -->
  <section id="hero-blog">
    <div class="hero-container" data-aos="fade-up">
      <h1>About Us</h1>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container">

        <?php foreach($about as $aboutus) : ?>
            <div class="section-title" data-aos="fade-in" data-aos-delay="100">
              <h2><?= $aboutus['title'] ?></h2>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
              <div class="col-lg-12">
                <div class="info-box mb-4 p-3">
                    <p><?= $aboutus['content'] ?></p>
                </div>
              </div>

            </div>
        <?php break ?>
        <?php endforeach ?>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
