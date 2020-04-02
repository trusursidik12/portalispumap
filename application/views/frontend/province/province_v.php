<!-- ======= Hero Section ======= -->
<section id="hero-blog">
  <div class="hero-container" data-aos="fade-up">
    <h1>Provinsi</h1>
  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= Services Section ======= -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title" style="margin-bottom: -70px;">
      </div>
      
      <div id="colorlib-blog">
        <div class="container">
          <div class="row text-center">
            <h2 class="bold">Provinsi</h2>
          </div>
          <div class="row row-pb-md">

            <?php foreach($aqmprovinsi as $provinsi) : ?>
              <?php foreach($aqmdata as $data) : ?>
                <?php if($provinsi['id_stasiun'] == $data['id_stasiun']) : ?>
                  <div class="col-md-4">
                    <div class="articleprovinsi animate-box">
                      <a href="blogfull.html" class="blog-img-provinsi">
                        <img class="img-responsive" src="http://ispumaps.id/ispumapapi/assets/icon/province/<?= $provinsi['icon'] ?>" alt="html5 bootstrap by colorlib.com">
                        <div class="overlay"></div>
                        <div class="link">
                          <span class="read"><?= $provinsi['provinsi'] ?></span>
                        </div>
                      </a>
                      <div class="desc">
                        <span class="meta"><?= $data['waktu'] ?></span>
                        <h2><a href="blogfull.html"><?= $provinsi['provinsi'] ?> - <?= $provinsi['id_stasiun'] ?></a></h2>
                        <div class="d-flex text-center">                                       
                          <div class="col-sm-3">
                            <?= $data['pm10'] == '-1' || $data['pm10'] == '' ? '' : '<p><b>PM10</b></p>'; ?>
                            <?= $data['pm10'] == '-1' || $data['pm10'] == '' ? '' : '<p><b>'.$data['pm10'].'</b></p>'; ?>                            
                          </div>
                          <div class="col-sm-3">
                            <?= $data['pm25'] == '-1' || $data['pm25'] == '' ? '' : '<p><b>PM25</b></p>'; ?>
                            <?= $data['pm25'] == '-1' || $data['pm25'] == '' ? '' : '<p><b>'.$data['pm25'].'</b></p>'; ?>
                          </div>
                          <div class="col-sm-3">
                            <p><b>&nbsp;</b></p>
                          </div>
                          <div class="col-sm-3">
                            <p><b>&nbsp;</b></p>
                          </div>
                        </div>
                        <div class="d-flex text-center">                          
                          <?php if($data['id_stasiun'] == 'SKH_GUPIT' || $data['id_stasiun'] == 'SKH_PLESAN' || $data['id_stasiun'] == 'SKH_RUM') : ?>
                            <div class="col-sm">
                              <p><b>H2S</b></p>
                              <p><b><?= $data['h2s'] ?></b></p>
                            </div>
                            <div class="col-sm">
                              <p><b>CS2</b></p>
                              <p><b><?= $data['cs2'] ?></b></p>
                            </div>
                          <?php endif ?>
                          <div class="col-sm">
                            <?= $data['so2'] == '-1' || $data['so2'] == '' ? '' : '<p><b>SO2</b></p>'; ?>
                            <?= $data['so2'] == '-1' || $data['so2'] == '' ? '' : '<p><b>'.$data['so2'].'</b></p>'; ?>
                          </div>
                          <div class="col-sm">
                            <?= $data['co'] == '-1' || $data['co'] == '' ? '' : '<p><b>CO</b></p>'; ?>
                            <?= $data['co'] == '-1' || $data['co'] == '' ? '' : '<p><b>'.$data['co'].'</b></p>'; ?>
                          </div>
                          <div class="col-sm">
                            <?= $data['o3'] == '-1' || $data['o3'] == '' ? '' : '<p><b>O3</b></p>'; ?>
                            <?= $data['o3'] == '-1' || $data['o3'] == '' ? '' : '<p><b>'.$data['o3'].'</b></p>'; ?>
                          </div>
                          <div class="col-sm">
                            <?= $data['no2'] == '-1' || $data['no2'] == ''? '' : '<p><b>NO2</b></p>'; ?>
                            <?= $data['no2'] == '-1' || $data['no2'] == '' ? '' : '<p><b>'.$data['no2'].'</b></p>'; ?>
                          </div>
                        </div>
                        <div class="d-flex text-center">
                          <div class="col-sm">
                            <?= $data['temperature'] == '-1' || $data['temperature'] == '' ? '' : '<p><img src="'.base_url().'assets/frontend/assets/img/weather/temperature.png" width="30"></p>'; ?>
                            <?= $data['temperature'] == '-1' || $data['temperature'] == '' ? '' : '<p><b>'.$data['temperature'].'</b></p>'; ?>
                          </div>
                          <div class="col-sm">
                            <?= $data['ws'] == '-1' || $data['ws'] == '' ? '' : '<p><img src="'.base_url().'assets/frontend/assets/img/weather/ws.png" width="30"></p>'; ?>
                            <?= $data['humidity'] == '-1' || $data['humidity'] == '' ? '' : '<p><b>'.$data['humidity'].'</b></p>'; ?>
                          </div>
                          <div class="col-sm">
                            <?= $data['humidity'] == '-1' || $data['humidity'] == '' ? '' : '<p><img src="'.base_url().'assets/frontend/assets/img/weather/humidity.png" width="30"></p>'; ?>
                            <?= $data['humidity'] == '-1' || $data['humidity'] == '' ? '' : '<p><b>'.$data['humidity'].'</b></p>'; ?>
                          </div>
                          <div class="col-sm">
                            <?= $data['rain_intensity'] == '-1' || $data['rain_intensity'] == '' ? '' : '<p><img src="'.base_url().'assets/frontend/assets/img/weather/rain_intensity.png" width="30"></p>'; ?>
                            <?= $data['rain_intensity'] == '-1' || $data['rain_intensity'] == '' ? '' : '<p><b>'.$data['rain_intensity'].'</b></p>'; ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endif ?>
              <?php endforeach ?>
            <?php endforeach ?>

          </div>

        </div>
      </div>

    </div>
  </section><!-- End Services Section -->

</main><!-- End #main -->
