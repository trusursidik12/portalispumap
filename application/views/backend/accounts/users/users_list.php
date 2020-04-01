<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3 class="card-title">
              <a href="<?= site_url('accounts/'.$controllers.'/add') ?>" ><button type="button" class="btn btn-block btn-primary"><i class="fas fa-plus-square"></i> <?= $title_menu; ?></button></a>
            </h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= site_url('dashboard') ?>">Dashboard</a></li>
            <li class="breadcrumb-item active"><?= $title_header; ?></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header"><h3 class="card-title"><?= $title_header; ?></h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive">
            <table id="example" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>No</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Level</th>
                <th width="30">Actions</th>
              </tr>
              </thead>
              <tbody>
              <?php $no=1; foreach($users as $data) : ?>
              <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['usr_fullname'] ?></td>
                <td><?= $data['usr_email'] ?></td>
                <td><?= $data['lvl_name'] ?></td>
                <td>
                  <div class="btn-group btn-group-sm">
                    <a href="#" class="btn btn-info" data-toggle="modal" data-target="#exampleModal<?= $data['usr_slug'] ?>"><i class="fas fa-eye"></i></a>
                    <a href="<?= site_url('/accounts/users/edit/'.$data['usr_slug']) ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                    <a href="<?= site_url('/accounts/users/delete/'.encrypt_url($data['usr_id'])) ?>" onclick="return confirm('Are you sure you want to Remove?');" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                  </div>
                </td>
              </tr>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal<?= $data['usr_slug']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">View Detail</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="card-body box-profile">
                      <?php if ( $data['usr_photo'] == 'nophoto.png' ) : ?>
                        <div class="text-center">
                          <img class="profile-user-img img-fluid img-responsive"
                               src="<?=base_url()?>assets/backend/img/accounts/users/nophoto/nophoto.png"
                               alt="User profile picture">
                        </div>
                      <?php else : ?>
                        <div class="text-center">
                          <img class="profile-user-img img-fluid img-responsive"
                               src="<?= base_url()?>assets/backend/img/accounts/users/<?= $data['usr_photo']; ?>"
                               alt="User profile picture">
                        </div>
                      <?php endif; ?>
                      </div>
                      <div class="d-flex">
                        <div class="col-sm-4"><p>Full Name</p></div>
                        <div class="col-sm-8"><p>: <?= $data['usr_fullname'] ?></p></div>
                      </div>
                      <div class="d-flex">
                        <div class="col-sm-4"><p>User Level</p></div>
                        <div class="col-sm-8"><p>: <?= $data['lvl_name'] ?></p></div>
                      </div>
                      <div class="d-flex">
                        <div class="col-sm-4"><p>User Email</p></div>
                        <div class="col-sm-8"><p>: <?= $data['usr_email'] ?></p></div>
                      </div>
                      <div class="d-flex">
                        <div class="col-sm-4"><p>User Phone Number</p></div>
                        <div class="col-sm-8"><p>: <?= $data['usr_phone'] ?></p></div>
                      </div>
                      <div class="d-flex">
                        <div class="col-sm-4"><p>User Address</p></div>
                        <div class="col-sm-8"><p>: <?= $data['usr_address'] ?></p></div>
                      </div><hr class="hr">
                      <div class="d-flex">
                        <div class="col-sm-4"><p>Created At</p></div>
                        <div class="col-sm-8"><p>: <?= $data['usr_created_at'] ?></p></div>
                      </div>
                      <?php foreach($users as $createdby) : ?>
                        <?= $createdby['usr_id'] === $data['usr_created_by'] ? '
                        <div class="d-flex">
                          <div class="col-sm-4"><p>Created By</p></div>
                          <div class="col-sm-8"><p>: '.$createdby['usr_fullname'].'</p></div>
                        </div>' : null ?>
                      <?php endforeach ?>
                      <?= $data['usr_edited_at'] != '0000-00-00 00:00:00' ? '
                      <div class="d-flex">
                        <div class="col-sm-4"><p>Edited At</p></div>
                        <div class="col-sm-8"><p>: '.$data['usr_edited_at'].'</p></div>
                      </div>' : null ?>                      
                      <?php foreach($users as $createdby) : ?>
                        <?= $createdby['usr_id'] === $data['usr_edited_by'] ? '
                      <div class="d-flex">
                        <div class="col-sm-4"><p>Edited By</p></div>
                        <div class="col-sm-8"><p>: '.$createdby['usr_fullname'].'</p></div>
                      </div>' : null ?>
                      <?php endforeach ?>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>

              <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->