
  <!-- ======= Hero Section ======= -->
  <section id="hero-blog" >
    <div class="hero-container" data-aos="fade-up">
      <h1><a href="<?= site_url('pages/news') ?>" class="text-white">News</a></h1>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" style="margin-bottom: -120px;">
          <h2><?= $singlenews['title'] ?></h2>
        </div>
        
        <div id="colorlib-blog">
          <div class="container">
            <div class="row text-center">
            </div>
            <div class="row row-pb-md">
              <div class="col-md-12">
                <div class="article text-center">
                  <a href="blog.html">
                    <img width="80%" class="img-blog" src="<?= $singlenews['image'] ?>" alt="html5 bootstrap by colorlib.com">
                    <div class="overlay"></div>
                  </a>
                  <div class="">
                    <p style="text-align: justify;"><?= $singlenews['content'] ?></p>
                    <div class="text-left">
                      <span class="text-right"><?= date('d-m-Y', strtotime($singlenews['created_at'])) ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services" style="margin-top: -200px;">
      <div class="container">

        <div class="section-title" style="margin-bottom: -120px;">
          <h2>Related News</h2>
        </div>
        
        <div id="colorlib-blog">
          <div class="container">
            <div class="row text-center">
              <h2 class="bold">Related News</h2>
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

  </main><!-- End #main -->