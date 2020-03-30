<!-- ***** Hero Area Start ***** -->
<div class="hero-area d-flex align-items-center" style="background-color: #009EE5;">
   
    <!-- Hero Thumbnail -->
    <div class="hero-thumbnail equalize bg-img" style="background-image: url(<?= base_url() ?>assets/frontend/img/bg-img/ranking.jpg);position: relative; max-width: 100% ; max-height: 100%;"></div>
    
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
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Baik &#128515;</td>
                                <td class="text-white bg-success">0 - 50</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Sedang &#128578;</td>
                                <td class="text-white bg-primary">51 - 100</td>
                            </tr>   
                            <tr>
                                <td>3</td>
                                <td>Tidak Sehat &#128552;</td>
                                <td class="text-white bg-warning">101 - 200</td>
                            </tr> 
                            <tr>
                                <td>4</td>
                                <td>Sangat Tidak Sehat &#129319;</td>
                                <td class="text-white bg-danger">201 - 300</td>
                            </tr>    
                            <tr>
                                <td>5</td>
                                <td>Berbahaya &#128567;</td>
                                <td class="text-white bg-dark" style="color: #FFFFFF;"> >300 </td>
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
                <div class="d-flex nav nav-tabs justify-content-center">

                    <a href="#pm10" class="btn btn-primary btn-sm"><i class="fa fa-align-left"></i> PM10</a>&nbsp;
                    <a href="#pm25" class="btn btn-primary btn-sm"><i class="fa fa-align-left"></i> PM25</a>&nbsp;
                    <a href="#so2" class="btn btn-primary btn-sm active"><i class="fa fa-align-left"></i> SO2</a>&nbsp;
                    <a href="#co" class="btn btn-primary btn-sm"><i class="fa fa-align-left"></i> CO</a>&nbsp;
                    <a href="#o3" class="btn btn-primary btn-sm"><i class="fa fa-align-left"></i> O3</a>&nbsp;
                    <a href="#no2" class="btn btn-primary btn-sm"><i class="fa fa-align-left"></i> NO2</a>

                </div>
                <div class="table-responsive" style="margin-top: 20px;">

                    <div class="tab-content">

                        <div id="pm10" class="container tab-pane fade">
                            <table border="1" width="100%" class="text-center">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>STASIUN</th>
                                        <th>PROVINSI</th>
                                        <th>DATE</th>
                                        <th>PM10</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; rsort($aqmrankpm10); foreach($aqmrankpm10 as $datapm10) : ?>
                                        <?php foreach($aqmprovinsi as $provinsi) : ?>
                                            <?php if($provinsi['id_stasiun'] == $datapm10['id_stasiun']) : ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $datapm10['id_stasiun'] ?></td>
                                                    <td><?= $provinsi['provinsi'] ?></td>
                                                    <td><?= $datapm10['waktu'] ?></td>
                                                    <td class="
                                                        <?php if($datapm10['pm10'] >= 0 & $datapm10['pm10'] <= 50) : ?>
                                                            <?= 'text-white bg-success'; ?>
                                                        <?php elseif($datapm10['pm10'] >= 51 & $datapm10['pm10'] <= 100) : ?>
                                                            <?= 'text-white bg-primary'; ?>
                                                        <?php elseif($datapm10['pm10'] >= 101 & $datapm10['pm10'] <= 200) : ?>
                                                            <?= 'text-white bg-warning'; ?>
                                                        <?php elseif($datapm10['pm10'] >= 201 & $datapm10['pm10'] <= 300) : ?>
                                                            <?= 'text-white bg-danger'; ?>
                                                        <?php elseif($datapm10['pm10'] > 300) : ?>
                                                            <?= 'text-white bg-dark'; ?>
                                                        <?php endif ?>
                                                    "><?= $datapm10['pm10'] ?></td>
                                                </tr>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>

                        <div id="pm25" class="container tab-pane fade">
                            <table border="1" width="100%" class="text-center">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>STASIUN</th>
                                        <th>PROVINSI</th>
                                        <th>DATE</th>
                                        <th>PM25</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; rsort($aqmrankpm25); foreach($aqmrankpm25 as $datapm25) : ?>
                                        <?php foreach($aqmprovinsi as $provinsi) : ?>
                                            <?php if($provinsi['id_stasiun'] == $datapm25['id_stasiun']) : ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $datapm25['id_stasiun'] ?></td>
                                                    <td><?= $provinsi['provinsi'] ?></td>
                                                    <td><?= $datapm25['waktu'] ?></td>
                                                    <td class="
                                                        <?php if($datapm25['pm25'] >= 0 & $datapm25['pm25'] <= 50) : ?>
                                                            <?= 'text-white bg-success'; ?>
                                                        <?php elseif($datapm25['pm25'] >= 51 & $datapm25['pm25'] <= 100) : ?>
                                                            <?= 'text-white bg-primary'; ?>
                                                        <?php elseif($datapm25['pm25'] >= 101 & $datapm25['pm25'] <= 200) : ?>
                                                            <?= 'text-white bg-warning'; ?>
                                                        <?php elseif($datapm25['pm25'] >= 201 & $datapm25['pm25'] <= 300) : ?>
                                                            <?= 'text-white bg-danger'; ?>
                                                        <?php elseif($datapm25['pm25'] > 300) : ?>
                                                            <?= 'text-white bg-dark'; ?>
                                                        <?php endif ?>
                                                    "><?= $datapm25['pm25'] ?></td>
                                                </tr>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>

                        <div id="so2" class="container tab-pane active">
                            <table border="1" width="100%" class="text-center">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>STASIUN</th>
                                        <th>PROVINSI</th>
                                        <th>DATE</th>
                                        <th>SO2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; rsort($aqmrankso2); foreach($aqmrankso2 as $dataso2) : ?>
                                        <?php foreach($aqmprovinsi as $provinsi) : ?>
                                            <?php if($provinsi['id_stasiun'] == $dataso2['id_stasiun']) : ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $dataso2['id_stasiun'] ?></td>
                                                    <td><?= $provinsi['provinsi'] ?></td>
                                                    <td><?= $dataso2['waktu'] ?></td>
                                                    <td class="
                                                        <?php if($dataso2['so2'] >= 0 & $dataso2['so2'] <= 50) : ?>
                                                            <?= 'text-white bg-success'; ?>
                                                        <?php elseif($dataso2['so2'] >= 51 & $dataso2['so2'] <= 100) : ?>
                                                            <?= 'text-white bg-primary'; ?>
                                                        <?php elseif($dataso2['so2'] >= 101 & $dataso2['so2'] <= 200) : ?>
                                                            <?= 'text-white bg-warning'; ?>
                                                        <?php elseif($dataso2['so2'] >= 201 & $dataso2['so2'] <= 300) : ?>
                                                            <?= 'text-white bg-danger'; ?>
                                                        <?php elseif($dataso2['so2'] > 300) : ?>
                                                            <?= 'text-white bg-dark'; ?>
                                                        <?php endif ?>
                                                    "><?= $dataso2['so2'] ?></td>
                                                </tr>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>

                        <div id="co" class="container tab-pane fade">
                            <table border="1" width="100%" class="text-center">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>STASIUN</th>
                                        <th>PROVINSI</th>
                                        <th>DATE</th>
                                        <th>CO</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; rsort($aqmrankco); foreach($aqmrankco as $dataco) : ?>
                                        <?php foreach($aqmprovinsi as $provinsi) : ?>
                                            <?php if($provinsi['id_stasiun'] == $dataco['id_stasiun']) : ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $dataco['id_stasiun'] ?></td>
                                                    <td><?= $provinsi['provinsi'] ?></td>
                                                    <td><?= $dataco['waktu'] ?></td>
                                                    <td class="
                                                        <?php if($dataco['co'] >= 0 & $dataco['co'] <= 50) : ?>
                                                            <?= 'text-white bg-success'; ?>
                                                        <?php elseif($dataco['co'] >= 51 & $dataco['co'] <= 100) : ?>
                                                            <?= 'text-white bg-primary'; ?>
                                                        <?php elseif($dataco['co'] >= 101 & $dataco['co'] <= 200) : ?>
                                                            <?= 'text-white bg-warning'; ?>
                                                        <?php elseif($dataco['co'] >= 201 & $dataco['co'] <= 300) : ?>
                                                            <?= 'text-white bg-danger'; ?>
                                                        <?php elseif($dataco['co'] > 300) : ?>
                                                            <?= 'text-white bg-dark'; ?>
                                                        <?php endif ?>
                                                    "><?= $dataco['co'] ?></td>
                                                </tr>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>

                        <div id="o3" class="container tab-pane fade">
                            <table border="1" width="100%" class="text-center">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>STASIUN</th>
                                        <th>PROVINSI</th>
                                        <th>DATE</th>
                                        <th>O3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; rsort($aqmranko3); foreach($aqmranko3 as $datao3) : ?>
                                        <?php foreach($aqmprovinsi as $provinsi) : ?>
                                            <?php if($provinsi['id_stasiun'] == $datao3['id_stasiun']) : ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $datao3['id_stasiun'] ?></td>
                                                    <td><?= $provinsi['provinsi'] ?></td>
                                                    <td><?= $datao3['waktu'] ?></td>
                                                    <td class="
                                                        <?php if($datao3['o3'] >= 0 & $datao3['o3'] <= 50) : ?>
                                                            <?= 'text-white bg-success'; ?>
                                                        <?php elseif($datao3['o3'] >= 51 & $datao3['o3'] <= 100) : ?>
                                                            <?= 'text-white bg-primary'; ?>
                                                        <?php elseif($datao3['o3'] >= 101 & $datao3['o3'] <= 200) : ?>
                                                            <?= 'text-white bg-warning'; ?>
                                                        <?php elseif($datao3['o3'] >= 201 & $datao3['o3'] <= 300) : ?>
                                                            <?= 'text-white bg-danger'; ?>
                                                        <?php elseif($datao3['o3'] > 300) : ?>
                                                            <?= 'text-white bg-dark'; ?>
                                                        <?php endif ?>
                                                    "><?= $datao3['o3'] ?></td>
                                                </tr>
                                            <?php endif ?>
                                        <?php endforeach ?>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>

                        <div id="no2" class="container tab-pane fade">
                            <table border="1" width="100%" class="text-center">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>STASIUN</th>
                                        <th>PROVINSI</th>
                                        <th>DATE</th>
                                        <th>NO2</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1; rsort($aqmrankno2); foreach($aqmrankno2 as $datano2) : ?>
                                        <?php foreach($aqmprovinsi as $provinsi) : ?>
                                            <?php if($provinsi['id_stasiun'] == $datano2['id_stasiun']) : ?>
                                                <tr>
                                                    <td><?= $no++; ?></td>
                                                    <td><?= $datano2['id_stasiun'] ?></td>
                                                    <td><?= $provinsi['provinsi'] ?></td>
                                                    <td><?= $datano2['waktu'] ?></td>
                                                    <td class="
                                                        <?php if($datano2['no2'] >= 0 & $datano2['no2'] <= 50) : ?>
                                                            <?= 'text-white bg-success'; ?>
                                                        <?php elseif($datano2['no2'] >= 51 & $datano2['no2'] <= 100) : ?>
                                                            <?= 'text-white bg-primary'; ?>
                                                        <?php elseif($datano2['no2'] >= 101 & $datano2['no2'] <= 200) : ?>
                                                            <?= 'text-white bg-warning'; ?>
                                                        <?php elseif($datano2['no2'] >= 201 & $datano2['no2'] <= 300) : ?>
                                                            <?= 'text-white bg-danger'; ?>
                                                        <?php elseif($datano2['no2'] > 300) : ?>
                                                            <?= 'text-white bg-dark'; ?>
                                                        <?php endif ?>
                                                    "><?= $datano2['no2'] ?></td>
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
    </div>
</div>

<script>
    $(document).ready(function(){
      $(".nav-tabs a").click(function(){
        $(this).tab('show');
      });
    });
</script>