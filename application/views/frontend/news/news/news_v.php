<!-- ***** Hero Area Start ***** -->
<div class="hero-area d-flex align-items-center">
   
    <!-- Hero Thumbnail -->
    <div class="hero-thumbnail equalize bg-img" style="background-image:url(<?= base_url('assets/frontend/img/news-img/weather.jpg') ?>); position: relative; max-width: 100% ; max-height: 100%;" ></div>
    
    <!-- Hero Content -->
    <div class="hero-content-height equalize">
        <div class="container-fluid h-10">
            <div class="row h-10 align-items-center justify-content-center">
                <div class="col-12 col-md-8" style="margin-top: 100px;">
                    <div class="line"></div>
                    <h2 class="text-white">NEWS</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Hero Area End ***** -->

<!-- ***** News Area Start ***** -->
<div class="container">
    <div class="row">
    
        <div class="col-md-12 col-lg-8" style="padding-top: 50px;">
            <div class="row">
                <?php foreach($news as $newsdata) : ?>
                <div class="col-sm-6">
                    <img src="<?= $newsdata['image'] ?>" alt="">
                    <h4 class="pt-20"><a href="<?= site_url('pages/news/'.$newsdata['slug']) ?>"><b><?= $newsdata['title'] ?></b></a></h4>
                    <ul class="list-li-mr-20 pt-10 mb-30">
                        <li class="color-lite-black">by <b>Ispumap.id,</b> <?= $newsdata['created_at'] ?></li>
                    </ul>
                    <a class="dplay-block btn-brdr-primary mt-20 mb-md-50" href="<?= site_url('pages/news/title') ?>">
                        <b>READ MORE</b>
                    </a>
                </div><!-- col-sm-6 -->
                <?php endforeach ?>
                
            </div><!-- row -->
            
        </div><!-- col-md-9 -->

        <div class="d-none d-md-block d-lg-none col-md-3" ></div>
        <div class="col-md-6 col-lg-4" style="padding-top: 50px;" >
            <div class="pl-20 pl-md-0">
                <ul class="list-block list-li-ptb-15 list-btm-border-black bg-primary text-center">
                    <li><b>ID STASIUN/PROVINSI = SUHU SAAT INI</b></li>
                    <li><b>ID STASIUN/PROVINSI = SUHU SAAT INI</b></li>
                    <li><b>ID STASIUN/PROVINSI = SUHU SAAT INI</b></li>
                    <li><b>ID STASIUN/PROVINSI = SUHU SAAT INI</b></li>
                    <li><b>ID STASIUN/PROVINSI = SUHU SAAT INI</b></li>
                    <li><b>ID STASIUN/PROVINSI = SUHU SAAT INI</b></li>
                </ul>
            </div>
        </div>
    </div> <!-- row -->
</div> <!-- container -->