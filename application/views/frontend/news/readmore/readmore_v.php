<!-- ***** Hero Area Start ***** -->
<div class="hero-area d-flex align-items-center" style="background-color: #009EE5;">
   
    <!-- Hero Thumbnail -->
    <div class="hero-thumbnail equalize bg-img" style="background-image:url(<?= base_url('assets/frontend/img/news-img/weather.jpg') ?>); position: relative; max-width: 100% ; max-height: 100%;" ></div>
    
    <!-- Hero Content -->
    <div class="hero-content-height equalize">
        <div class="container-fluid h-10">
            <div class="row h-10 align-items-center justify-content-center">
                <div class="col-12 col-md-8" style="margin-top: 100px;">
                    <div class="line"></div>
                    <a href="<?= site_url('pages/news') ?>"><h2 class="text-white">NEWS</h2></a>
                </div>
            </div>
        </div>
    </div>
</div>
<section>
    <div class="container">
        <div class="row">
        
            <div class="col-md-12 col-lg-8">
                <img src="<?= $singlenews['image'] ?>" style="padding-top: 50px;" alt="">
                <h3 class="mt-30"><b><?= $singlenews['title'] ?> </b></h3>
                <ul class="list-li-mr-20 mtb-15">
                    <li>by <b><?= $singlenews['created_by'] ?>,</b> <?= $singlenews['created_at'] ?></li>
                </ul>
                
                <p><?= $singlenews['content'] ?></p>
            </div><!-- col-md-9 -->
            
            <div class="d-none d-md-block d-lg-none col-md-3"></div>
            <div class="col-md-6 col-lg-4" style="padding-top: 50px;">
                <div class="pl-20 pl-md-0">

                    <div class="mtb-50">
                        <h4 class="p-title" style="position: relative; padding-bottom: 30px; margin-bottom: 20px;">
                            <p style="content: ''; position: absolute; bottom: 0; left: 0; width: 80px; height: 5px; background: #009EE5; z-index: 1; box-sizing: inherit;"></p>
                            <b>POPULAR POSTS</b>
                            <p style="content: ''; position: absolute; bottom: 0; left: 0; width: 100%; height: 1px; background: #ccc;"></p>
                        </h4>
                        <?php foreach(array_slice($news, 0, 10) as $newsdata) : ?>
                            <a class="oflow-hidden pos-relative mb-20 dplay-block" href="<?= site_url('pages/news/'.$newsdata['slug']) ?>" style="margin-bottom: 20px!important; position: relative; z-index: 1; display: block; overflow: hidden;">
                                <div class="wh-100x abs-tlr"><img style="height: 100px; width: 100px!important; position: absolute; top: 0; left: 0; right: 0; z-index: 1; box-sizing: inherit;" src="<?= $newsdata['image'] ?>" alt=""></div>
                                <div class="ml-120 min-h-100x" style="margin-left: 120px!important; min-height: 100px!important;">
                                    <h5><b><?= $newsdata['title'] ?></b></h5>
                                    <h6 class="color-lite-black pt-10">by <span class="color-black"><b>Ispumap.id,</b></span> <?= $newsdata['created_at'] ?></h6>
                                </div>
                            </a><!-- oflow-hidden -->
                        <?php endforeach ?>

                        
                    </div><!-- mtb-50 -->

                </div>
            </div>
        </div>
    </div>
</section>