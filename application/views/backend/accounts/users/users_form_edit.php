<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3 class="card-title">
              <a href="<?= site_url('accounts/'.$controllers.'/list') ?>" ><button type="button" class="btn btn-block btn-primary"><i class="fas fa-list"></i> <?= $title_menu; ?></button></a>
            </h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= site_url('dashboard') ?>">Dashboard</a></li>
            <li class="breadcrumb-item active">General Form</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="container">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title"><?= $title_header; ?></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="post" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <select name="usr_lvl_id" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                    <?php foreach ($levels as $level): ?>
                      <?php if ($level['lvl_id'] == $users['usr_lvl_id']): ?>
                        <option value="<?= $level['lvl_id']; ?>" selected="selected"><?= $level['lvl_name']; ?></option>
                      <?php else : ?>
                        <option value="<?= $level['lvl_id']; ?>"><?= $level['lvl_name']; ?></option>
                      <?php endif ?>
                    <?php endforeach ?>
                  </select>
                </div>
                <div class="form-group">
                  <input type="Hidden" name="usr_id" value="<?= $users['usr_id'] ?>">
                  <input type="Text" name="usr_fullname" value="<?= $users['usr_fullname'] ?>" class="form-control <?= form_error('usr_fullname') == TRUE ? 'is-invalid' : ''; ?>" placeholder="Enter Full Name *">
                  <a style="color: red;"><?= form_error('usr_fullname') ?></a>
                </div>
                <div class="form-group">
                  <input type="Email" name="usr_email" value="<?= $users['usr_email'] ?>" class="form-control <?= form_error('usr_email') == TRUE ? 'is-invalid' : ''; ?>" placeholder="Enter Email *">
                  <a style="color: red;"><?= form_error('usr_email') ?></a>
                </div>
                <div class="form-group">
                  <input type="Password" name="usr_password" class="form-control <?= form_error('usr_password') == TRUE ? 'is-invalid' : ''; ?>" placeholder="Enter Password *">
                  <a style="color: red;"><?= form_error('usr_password') ?></a>
                </div>
                <div class="form-group">
                  <input type="Password" name="usr_repassword" class="form-control <?= form_error('usr_repassword') == TRUE ? 'is-invalid' : ''; ?>" placeholder="Enter Re - Password *">
                  <a style="color: red;"><?= form_error('usr_repassword') ?></a>
                </div>
                <div class="form-group">
                  <input type="Number" name="usr_phone" value="<?= $users['usr_phone'] ?>" class="form-control" placeholder="Enter Phone Number">
                </div>
                <div class="form-group">
                  <textarea name="usr_address" class="form-control" placeholder="Enter Address"><?= $users['usr_address'] ?></textarea>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="Hidden" name="photos" value="<?= $users['usr_photo'] ?>">
                      <input type="file" name="usr_photo" class="custom-file-input <?= form_error('usr_photo') == TRUE ? 'is-invalid' : ''; ?>">
                      <a style="color: red;"><?= form_error('usr_photo') ?></a>
                      <label class="custom-file-label" for="exampleInputFile">Choose Photo</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text" id="">Upload</span>
                    </div>
                  </div>
                  <a style="color: red;"><?= form_error('usr_photo') ?></a>
                </div>
                <div class="form-group">
                  <button type="Submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
                  <button type="Reset" class="btn btn-default"><i class="fas fa-sync-alt"></i> Reset</button>
                </div>
              </div>
              <!-- /.card-body -->
            </form>
          </div>
          <!-- /.card -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->