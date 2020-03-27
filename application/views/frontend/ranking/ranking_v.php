<!-- ***** Hero Area Start ***** -->
<div class="hero-area d-flex align-items-center" style="background-color: #009EE5;">
   
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
<div class="portfolio-area section-padding-50">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table border="1" width="100%" class="text-center">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>ISPU</th>
                                <th>RANGE NILAI &#127777;</th>
                                <!-- <th>SO2</th> -->
                                <!-- <th>CO</th> -->
                                <!-- <th>O3</th> -->
                                <!-- <th>NO2</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Baik &#128515;</td>
                                <td bgcolor="#227339">0&deg; - 50&deg;</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Sedang &#128578;</td>
                                <td bgcolor="#2B72B2">51&deg; - 100&deg;</td>
                            </tr>   
                            <tr>
                                <td>3</td>
                                <td>Tidak Sehat &#128552;</td>
                                <td bgcolor="#E6E443">101&deg; - 200&deg;</td>
                            </tr> 
                            <tr>
                                <td>4</td>
                                <td>Sangat Tidak Sehat &#129319;</td>
                                <td bgcolor="#BF3B37">201&deg; - 300&deg;</td>
                            </tr>    
                            <tr>
                                <td>5</td>
                                <td>Berbahaya &#128567;</td>
                                <td bgcolor="#000000" style="color: #FFFFFF;"> >300&deg; </td>
                            </tr>                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-area section-padding-20">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table border="1" width="100%" class="text-center">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>STASIUN &#128680;</th>
                                <th>DATE &#128197;</th>
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
                                    <td bgcolor="227339"><?= $ispu['so2'] ?></td>
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