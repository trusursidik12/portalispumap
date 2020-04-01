<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $title_header; ?></title>
  <link rel="icon" href="<?=base_url('assets/backend/img/settings/iconbar/noiconbar/bar.png')?>">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet"> -->
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <style type="text/css">
    .hr{
      border: 1px solid red;
      margin-top: 0px;
      margin-bottom: 0px;
    }
  </style>
  <!-- jQuery -->
  <script src="<?= base_url() ?>assets/backend/plugins/jquery/jquery.min.js"></script>
  <!-- js cart -->
  <script src="<?= base_url('assets/backend/js/chart/chart.bundle.js') ?>"></script>
  
</head>
<!-- sidebar-collapse (untuk hide)-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block" style="padding-top: 5px;">
        <a href="<?= site_url() ?>" target="_blank" class="btn btn-outline-primary btn-sm">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Logout Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="<?= site_url('logout') ?>" class="dropdown-item">
            <i class="fas fa-sign-out-alt"></i> Logout
          </a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?= site_url() ?>" class="brand-link">
      <img src="<?=base_url('assets/backend/img/settings/iconbar/noiconbar/bar.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ISPUMAP</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('assets/backend/img/accounts/users/nophoto/nophoto.png') ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $this->fungsi->user_login()->usr_fullname ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- MENU -->
          <li class="nav-item">
            <a href="<?= site_url('dashboard') ?>" class="nav-link <?= $this->uri->uri_string() == 'dashboards' ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Dashboard
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('news/list') ?>" class="nav-link
              <?=$this->uri->uri_string() == 'news/list'
              || $this->uri->uri_string() == 'news/add'
              || $this->uri->segment(1) == '' ? 'active' : ''; ?>
              ">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                Aqm News
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('faq/list') ?>" class="nav-link
              <?=$this->uri->uri_string() == 'faq/list'
              || $this->uri->uri_string() == 'faq/add'
              || $this->uri->segment(1) == '' ? 'active' : ''; ?>
              ">
              <i class="nav-icon fas fa-question-circle"></i>
              <p>
                Aqm Faq
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('about/list') ?>" class="nav-link
              <?=$this->uri->uri_string() == 'about/list'
              || $this->uri->uri_string() == 'about/add'
              || $this->uri->segment(1) == '' ? 'active' : ''; ?>
              ">
              <i class="nav-icon fas fa-info-circle"></i>
              <p>
                Aqm About
              </p>
            </a>
          </li>
          <li class="nav-header">ADMINISTRATOR</li>
          <li class="nav-item has-treeview
          <?= $this->uri->uri_string() == 'accounts/users/list'
          || $this->uri->uri_string() == 'accounts/users/add'
          || $this->uri->uri_string() == 'accounts/levels/list'
          || $this->uri->uri_string() == 'accounts/levels/add' ? 'menu-open' : ''; ?>">
            <a href="#" class="nav-link
            <?= $this->uri->uri_string() == 'accounts/users/list'
            || $this->uri->uri_string() == 'accounts/users/add'
            || $this->uri->uri_string() == 'accounts/levels/list'
            || $this->uri->uri_string() == 'accounts/levels/add' ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>
                Accounts
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= site_url('accounts/levels/list'); ?>" class="nav-link <?= $this->uri->uri_string() == 'accounts/levels/list' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level List</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= site_url('accounts/users/list'); ?>" class="nav-link <?= $this->uri->uri_string() == 'accounts/users/list' ? 'active' : ''; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Users List</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <?= $contentsbackend; ?>

  <footer class="main-footer">
    <strong>Copyright &copy; 2020</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url() ?>assets/backend/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url() ?>assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?= base_url() ?>assets/backend/plugins/chart.js/Chart.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url() ?>assets/backend/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url() ?>assets/backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url() ?>assets/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/backend/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?= base_url() ?>assets/backend/dist/js/demo.js"></script> -->
<!-- DataTables -->
<script src="<?= base_url() ?>assets/backend/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>assets/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>

</body>
</html>
