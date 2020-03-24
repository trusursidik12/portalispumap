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
<div class="table-responsive">
    <table border="1" width="100%" class="text-center">
        <thead>
            <tr>
                <th>NO</th>
                <th>STASIUN</th>
                <th>PM10</th>
                <th>PM25</th>
                <th>SO2</th>
                <th>CO</th>
                <th>O3</th>
                <th>NO2</th>
                <th>HC</th>
                <th>VOC</th>
                <th>NH3</th>
                <th>H2S</th>
                <th>CS2</th>
                <th>WS</th>
                <th>WD</th>
                <th>HUM</th>
                <th>TEMP</th>
                <th>PRESS</th>
                <th>SR</th>
                <th>RAIN&nbsp;INT</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; foreach($aqmdata as $data) : ?>
            <?php foreach($aqmprovinsi as $provinsi) : ?>
            <?php if($data['id_stasiun'] == $provinsi['id_stasiun']) : ?>
                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $provinsi['id_stasiun'] ?></td>
                    <td><?= $data['pm10'] ?></td>
                    <td><?= $data['pm25'] ?></td>
                    <td><?= $data['so2'] ?></td>
                    <td><?= $data['co'] ?></td>
                    <td><?= $data['o3'] ?></td>
                    <td><?= $data['no2'] ?></td>
                    <td><?= $data['hc'] ?></td>
                    <td><?= $data['voc'] ?></td>
                    <td><?= $data['nh3'] ?></td>
                    <td><?= $data['h2s'] ?></td>
                    <td><?= $data['cs2'] ?></td>
                    <td><?= $data['ws'] ?></td>
                    <td><?= $data['wd'] ?></td>
                    <td><?= $data['humidity'] ?></td>
                    <td><?= $data['temperature'] ?></td>
                    <td><?= $data['pressure'] ?></td>
                    <td><?= $data['sr'] ?></td>
                    <td><?= $data['rain_intensity'] ?></td>
                </tr>
            <?php endif ?>
            <?php endforeach ?>
            <?php endforeach ?>
        </tbody>
    </table>
</div>