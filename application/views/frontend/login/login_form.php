<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?=$titlebar;?></title>
  <link rel="icon" href="<?=base_url('assets/backend/img/settings/iconbar/noiconbar/bar.png')?>">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <style type="text/css">
    .card-body{
      margin-left: -70px;
      margin-right: -70px;
      padding-left: 70px;
      padding-right: 70px;
      padding-top: 70px;
      padding-bottom: 70px;
    }
    .bg-image{
      background-image: url(<?= base_url('assets/backend/img/bg/login/bg-login.jpg') ?>);
      background-repeat: no-repeat;
      background-size: 100%;
    }
  </style>
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo" style="margin-top: -90px">
      <img src="<?=base_url('assets/backend/img/settings/iconbar/noiconbar/bar.png')?>">
      <br>
      <a href="<?= base_url('login') ?>">Sign<b> In</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg"></p>

        <form action="<?= site_url('process')?>" method="post">
          <div class="input-group mb-3">
            <input type="Email" name="usr_email" class="form-control" placeholder="Email" autofocus>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="usr_password"  class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" name="login"  class="btn btn-block btn-flat text-white" style="background-color: #036368;">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
</body>
</html>
