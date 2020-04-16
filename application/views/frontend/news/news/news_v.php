
  <!-- ======= Hero Section ======= -->
  <section id="hero-blog">
    <div class="hero-container" data-aos="fade-up">
      <h1>News</h1>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <form class="">
        <div class="section-title" style="margin-bottom: -70px;">
          <div class="p-1">
          <input class="form-control" type="search" placeholder="Search" name="keyword" id="keyword" aria-label="Search">
        </div>
        <div class="p-1">
          <button class="btn btn-light" type="submit"><i class="fas fa-search"></i></button>
        </div>
        </div>
      </form>
        
        <!-- <div id="colorlib-blog"> -->
          <div class="container" style="margin-top:70px;">
            <!-- <div class="row text-center">
              <h2 class="bold">News</h2>
            </div> -->
            <div class="row row-pb-md">
                <?php foreach($news as $newsdata) : ?>
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
                                <!-- <p><?= substr($newsdata['content'], 0, 100) ?></p> -->
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>

            </div>

          </div>
        <!-- </div> -->

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->