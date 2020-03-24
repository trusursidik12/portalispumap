<!-- ***** Hero Area Start ***** -->
<div class="hero-area d-flex align-items-center">
   
    <!-- Hero Thumbnail -->
    <div class="hero-thumbnail equalize bg-img" style="background-image: url(<?= base_url() ?>assets/frontend/img/bg-img/ranking.png); position: relative; max-width: 100% ; max-height: 100%;"></div>
    
    <!-- Hero Content -->
    <div class="hero-content-height equalize">
        <div class="container-fluid h-10">
            <div class="row h-10 align-items-center justify-content-center">
                <div class="col-12 col-md-8" style="margin-top: 100px;">
                    <div class="line"></div>
                    <h2 class="text-white">RANKING</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ***** Hero Area End ***** -->
<!-- ***** Portfolio Area Start ***** -->
<div class="portfolio-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table border="1" width="100%" class="text-center">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>STASIUN</th>
                                <th>DATE</th>
                                <th>SO2</th>
                                <th>CO</th>
                                <th>O3</th>
                                <th>NO2</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach($aqmispu as $ispu) : ?>
                            <?php foreach($aqmprovinsi as $provinsi) : ?>
                            <?php if($ispu['id_stasiun'] == $provinsi['id_stasiun']) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $provinsi['id_stasiun'] ?></td>
                                    <td><?= $ispu['waktu'] ?></td>
                                    <td><?= $ispu['so2'] ?></td>
                                    <td><?= $ispu['co'] ?></td>
                                    <td><?= $ispu['o3'] ?></td>
                                    <td><?= $ispu['no2'] ?></td>
                                </tr>
                            <?php endif ?>
                            <?php endforeach ?>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>