<!-- ***** Hero Area Start ***** -->
<div class="hero-area d-flex align-items-center" style="background-color: #009EE5;">
   
    <!-- Hero Thumbnail -->
    <div class="hero-thumbnail equalize bg-img" style="background-image:url(<?= base_url('assets/frontend/img/bg-img/faq.jpg') ?>); position: relative; max-width: 100% ; max-height: 100%;"></div>
    
    <!-- Hero Content -->
    <div class="hero-content-height equalize">
        <div class="container-fluid h-10">
            <div class="row h-10 align-items-center justify-content-center">
                <div class="col-12 col-md-8" style="margin-top: 100px;">
                    <div class="line"></div>
                    <h2 class="text-white">FAQs</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<section>
<div class="container">
    <div class="row">
        <?php foreach($faqs as $datafaqs) : ?>
            <div class="col-md-12 col-lg-12">
                <h3 class="mt-30"><b><?= $datafaqs['title'] ?> </b></h3>
                <p><?= $datafaqs['content'] ?></p>
            </div><!-- col-md-9 -->
        <?php endforeach ?>
    </div>
</div>
</section>