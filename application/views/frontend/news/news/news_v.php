
  <!-- ======= Hero Section ======= -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css"/>
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
        <div class="section-title" style="margin-bottom: -50px;">
          <!-- <div class="d-flex"> -->
            <!-- <div class="row"> -->
              <div class="col-12" style="display: flex">
                <input class="form-control" type="search" placeholder="Search" name="keyword" id="keyword" aria-label="Search" style="border-style: groove;width: 100%;">
              <!-- </div> -->
              <!-- <div class="col-2 p-1"> -->
                <button class="btn btn-outline-dark" type="submit" style="margin-right: 0px;margin-bottom: 0px;border-color: white;"><i class="fas fa-search"></i></button>
              </div>
            <!-- </div> -->
          <!-- </div> -->
        </div>
      </form>
        
        <div id="colorlib-blog">
          <div class="container" style="margin-top:70px;">
            <div class="row text-center">
              <h2 class="bold">News</h2>
            </div>
            <div class="row row-pb-md">
              <?php if(empty($news)) : ?>
                 <div class="col-lg-12">
                  <div class="info-box mb-4 p-3" style="color: #444444;background: #fff;text-align: center;box-shadow: 0 0 30px rgba(214, 215, 216, 0.6);padding: 20px 0 30px 0;">
                      <img src="<?= base_url() ?>assets/frontend/assets/img/search-not-found.png" style="width: 250px;"><br><br>
                      <p><b>Upps... Pencarian yang anda cari tidak di temukan</b></p><br>
                      <button class="btn btn-light" onclick="window.location.href ='<?= site_url('pages/news') ?>'" style="background: #67b0d1;padding: 6px 30px 8px 30px;color: #fff;    border-radius: 50px;position: relative;">Coba Lagi</button>
                  </div>
                </div>
              <?php else : ?>
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
              <?php endif ?>

            </div>

          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

  </main><!-- End #main -->