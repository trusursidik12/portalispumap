<!-- ***** Hero Area Start ***** -->
    <section class="hero-area">
        <div class="hero-slides owl-carousel">

          <?php foreach($aqmprovinsi as $provinsi) : ?>
            <?php foreach($aqmdata as $data) : ?>
              <?php if($provinsi['id_stasiun'] == $data['id_stasiun']) : ?>
                <!-- Single Hero Slide -->
                <div class="single-hero-slide bg-img slide-background-overlay" style="background-image: url(http://ispumaps.id/ispumapapi/assets/icon/province/<?= $provinsi['icon'] ?>);">
                    <div class="container h-100">
                        <div class="row h-100 align-items-end">
                            <div class="col-12">
                                    <div class="d-flex" style="margin-top: 50px;">
                                      <?= $data['pm10'] == '-1' || $data['pm10'] == '' ? '' : '<div class="col-sm-3"><h4 class="text-white">PM10</h4></div>'; ?>
                                      <?= $data['pm25'] == '-1' || $data['pm25'] == '' ? '' : '<div class="col-sm-3"><h4 class="text-white">PM2.5</h4></div>'; ?>                                  
                                    </div>
                                    <div class="d-flex">
                                      <?= $data['pm10'] == '-1' || $data['pm10'] == '' ? '' : '<div class="col-sm-3"><h6 class="text-white">'.$data['pm10'].'</h6></div>'; ?>
                                      <?= $data['pm25'] == '-1' || $data['pm25'] == '' ? '' : '<div class="col-sm-3"><h6 class="text-white">'.$data['pm25'].'</h6></div>'; ?>
                                    </div>
                                    <div class="d-flex">
                                      <?= $data['so2'] == '-1' || $data['so2'] == '' ? '' : '<div class="col-sm-3"><h4 class="text-white">SO2</h4></div>'; ?>
                                      <?= $data['co'] == '-1' || $data['co'] == '' ? '' : '<div class="col-sm-3"><h4 class="text-white">CO</h4></div>'; ?>
                                      <?= $data['o3'] == '-1' || $data['o3'] == '' ? '' : '<div class="col-sm-3"><h4 class="text-white">O3</h4></div>'; ?>
                                      <?= $data['no2'] == '-1' || $data['no2'] == ''? '' : '<div class="col-sm-3"><h4 class="text-white">NO2</h4></div>'; ?>
                                      <?php if($data['id_stasiun'] == 'SKH_GUPIT' || $data['id_stasiun'] == 'SKH_PLESAN' || $data['id_stasiun'] == 'SKH_RUM') : ?>
                                        <div class="col-sm-3"><h4 class="text-white">H2S</h4></div>
                                        <div class="col-sm-3"><h4 class="text-white">CS2</h4></div>
                                      <?php endif ?>
                                    </div>
                                    <div class="d-flex">
                                      <?= $data['so2'] == '-1' || $data['so2'] == '' ? '' : '<div class="col-sm-3"><h6 class="text-white">'.$data['so2'].'</h6></div>'; ?>
                                      <?= $data['co'] == '-1' || $data['co'] == '' ? '' : '<div class="col-sm-3"><h6 class="text-white">'.$data['co'].'</h6></div>'; ?>
                                      <?= $data['o3'] == '-1' || $data['o3'] == '' ? '' : '<div class="col-sm-3"><h6 class="text-white">'.$data['o3'].'</h6></div>'; ?>
                                      <?= $data['no2'] == '-1' || $data['no2'] == '' ? '' : '<div class="col-sm-3"><h6 class="text-white">'.$data['no2'].'</h6></div>'; ?>
                                      <?php if($data['id_stasiun'] == 'SKH_GUPIT' || $data['id_stasiun'] == 'SKH_PLESAN' || $data['id_stasiun'] == 'SKH_RUM') : ?>
                                        <div class="col-sm-3"><h6 class="text-white"><?= $data['h2s'] ?></h6></div>
                                        <div class="col-sm-3"><h6 class="text-white"><?= $data['cs2'] ?></h6></div>
                                      <?php endif ?>
                                    </div>
                                    <div class="d-flex">
                                      <?= $data['temperature'] == '-1' || $data['temperature'] == '' ? '' : '<div class="col-sm-3"><h4 class="text-white">TEMP</h4></div>'; ?>
                                      <?= $data['ws'] == '-1' || $data['ws'] == '' ? '' : '<div class="col-sm-3"><h4 class="text-white">WS</h4></div>'; ?>
                                      <?= $data['humidity'] == '-1' || $data['humidity'] == '' ? '' : '<div class="col-sm-3"><h4 class="text-white">HUM</h4></div>'; ?>
                                      <?= $data['rain_intensity'] == '-1' || $data['rain_intensity'] == '' ? '' : '<div class="col-sm-3"><h4 class="text-white">RAIN&nbsp;INT</h4></div>'; ?>
                                    </div>
                                    <div class="d-flex">
                                      <?= $data['temperature'] == '-1' || $data['temperature'] == '' ? '' : '<div class="col-sm-3"><h6 class="text-white">'.$data['temperature'].'<sup>o</sup></h6></div>'; ?>
                                      <?= $data['ws'] == '-1' || $data['ws'] == '' ? '' : '<div class="col-sm-3"><h6 class="text-white">'.$data['ws'].'km/h</h6></div>'; ?>
                                      <?= $data['humidity'] == '-1' || $data['humidity'] == '' ? '' : '<div class="col-sm-3"><h6 class="text-white">'.$data['humidity'].'%</h6></div>'; ?>
                                      <?= $data['rain_intensity'] == '-1' || $data['rain_intensity'] == '' ? '' : '<div class="col-sm-3"><h6 class="text-white">'.$data['rain_intensity'].'</h6></div>'; ?>
                                    </div>
                                <div class="hero-slides-content">
                                    <div class="line"></div>
                                    <h2><?= $provinsi['id_stasiun'] ?></h2>
                                    <h4 class="text-white"><?= $provinsi['provinsi'] ?></h4>
                                    <p><?= $provinsi['alamat'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              <?php endif ?>
            <?php endforeach ?>
          <?php endforeach ?>

        </div>
    </section>
    <!-- ***** Hero Area End ***** -->

    <!-- ***** Portfolio Area Start ***** -->
    <div class="portfolio-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="portfolio-title">
                        <h2>“Ayo cek kualitas udara sekitarmu, apakah baik untuk <span>kesehatanmu</span> atau tidak.”</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between">
                <!-- Single Portfoio Area -->
                <div class="col-12 col-md-5">
                    <div class="single-portfolio-item mt-100 portfolio-item-1 wow fadeIn">
                        <div class="backend-content">
                            <img class="dots" src="<?= base_url() ?>assets/frontend/img/core-img/dots.png" alt="">
                            <h2>ISPUMAP</h2>
                        </div>
                        <div class="portfolio-thumb map-border">
                            <div id="googleMap" style="width:100%;height:500px;"></div>
                            <div class="col bg-light map-size map-top-aligin map-border-top">
                                <a href="<?= site_url('pages/maps') ?>" class="btn sonar-btn" style="margin-left: 250px; margin-top: 120px;">Explore Map</a>
                            </div>
                        </div>
                        <div class="portfolio-meta">
                            <p class="portfolio-date">Feb 02, 2018</p>
                            <h2>Last Update</h2>
                        </div>
                    </div>
                </div>
                <!-- Single Portfoio Area -->
                <div class="col-12 col-md-6" style="position: relative;">
                    <div class="single-portfolio-item mt-230 portfolio-item-2 wow fadeIn">
                        <div class="backend-content">
                            <img class="dots" src="<?= base_url() ?>assets/frontend/img/core-img/dots.png" alt="">
                        </div>
                        <div class="portfolio-thumb map-border">
                          <h1 style="margin-left: 10px;">Ranking</h1>
                          <div class="row" style="margin-right: 0px; margin-left: 10px;">
                            <div class="col-8 card"><h3>SURABAYA</h3></div>
                            <div class="col-3 card bg-success text-center"><h3>100</h3></div>
                          </div>
                          <div class="row" style="margin-right: 0px; margin-left: 10px;">
                            <div class="col-8 card"><h3>SURABAYA</h3></div>
                            <div class="col-3 card bg-success text-center"><h3>100</h3></div>
                          </div>
                          <div class="row" style="margin-right: 0px; margin-left: 10px;">
                            <div class="col-8 card"><h3>SURABAYA</h3></div>
                            <div class="col-3 card bg-success text-center"><h3>100</h3></div>
                          </div>
                          <div class="row" style="margin-right: 0px; margin-left: 10px;">
                            <div class="col-8 card"><h3>SURABAYA</h3></div>
                            <div class="col-3 card bg-success text-center"><h3>100</h3></div>
                          </div>
                          <div class="row" style="margin-right: 0px; margin-left: 10px;">
                            <div class="col-8 card"><h3>SURABAYA</h3></div>
                            <div class="col-3 card bg-success text-center"><h3>100</h3></div>
                          </div>
                          <div class="row" style="margin-right: 0px; margin-left: 10px;">
                            <div class="col-8 card"><h3>SURABAYA</h3></div>
                            <div class="col-3 card bg-success text-center"><h3>100</h3></div>
                          </div>
                          <div class="row" style="margin-right: 0px; margin-left: 10px;">
                            <div class="col-8 card"><h3>SURABAYA</h3></div>
                            <div class="col-3 card bg-success text-center"><h3>100</h3></div>
                          </div>
                          <div class="row" style="margin-right: 0px; margin-left: 10px;">
                            <div class="col-8 card"><h3>SURABAYA</h3></div>
                            <div class="col-3 card bg-success text-center"><h3>100</h3></div>
                          </div>
                          <div class="row" style="margin-right: 0px; margin-left: 10px;">
                            <div class="col-8 card"><h3>SURABAYA</h3></div>
                            <div class="col-3 card bg-success text-center"><h3>100</h3></div>
                          </div>
                          <div class="row" style="margin-right: 0px; margin-left: 10px;">
                            <div class="col-8 card"><h3>SURABAYA</h3></div>
                            <div class="col-3 card bg-success text-center"><h3>100</h3></div>
                          </div>
                          <div class="d-flex">
                            <div class="mr-auto"><h3></h3></div>
                            <div class="p-2">
                                <a href="<?= site_url('pages/ranking') ?>" class="btn sonar-btn">FULL RANKING</a>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ***** News Area Start ***** -->
            <div class="container" style="padding-top: 50px;">
                <div class="row">
                
                    <div class="col-md-12 col-lg-12 map-border" style="padding-top: 50px;">
                    <h4>News</h4>
                        <div class="row">
                            
                          <?php foreach(array_slice($news, 0, 3) as $newsdata) : ?>
                            <div class="col-sm-4">
                                <img src="<?= $newsdata['image'] ?>" alt="">
                                <h4 class="pt-20"><a href="<?= site_url('pages/news/'.$newsdata['slug']) ?>"><b><?= $newsdata['title'] ?></b></a></h4>
                                <ul class="list-li-mr-20 pt-10 mb-30">
                                    <li class="color-lite-black">by <b>Ispumap.id,</b> <?= $newsdata['created_at'] ?></li>
                                </ul>
                            <a class="dplay-block btn-brdr-primary mt-20 mb-md-50" href="<?= site_url('pages/news/'.$newsdata['slug']) ?>"><b>READ MORE</b></a>
                            </div><!-- col-sm-4 -->
                          <?php endforeach ?>
                            
                        </div><!-- row -->
                        
                    </div><!-- col-md-9 -->

                </div> <!-- row -->
            </div> <!-- container -->
            
        </div>
    </div>
    <!-- ***** Portfolio Area End ***** -->

    