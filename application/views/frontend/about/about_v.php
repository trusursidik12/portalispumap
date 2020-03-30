<!-- ***** Hero Area Start ***** -->
<div class="hero-area d-flex align-items-center" style="background-color: #009EE5;">
   
    <!-- Hero Thumbnail -->
    <div class="hero-thumbnail equalize bg-img" style="background-image:url(<?= base_url('assets/frontend/img/logo-img/portalispumap.jpg') ?>);position: relative; max-width: 100% ; max-height: 100%;" ></div>
    
    <!-- Hero Content -->
    <div class="hero-content-height equalize">
        <div class="container-fluid h-10">
            <div class="row h-10 align-items-center justify-content-center">
                <div class="col-12 col-md-8" style="margin-top: 100px;">
                    <div class="line"></div>
                    <h2 class="text-white">ABOUT&nbsp;US</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Hero Area End ***** -->
<main role="main" class="container" style="margin-top: 50px;">
    <?php foreach($about as $aboutus) : ?>
      <p class="lead"><?= $aboutus['content'] ?></p>
      <?php break ?>
    <?php endforeach ?>
</main>