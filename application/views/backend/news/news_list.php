<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h3 class="card-title">
              <a href="<?= site_url($controllers.'/add') ?>" ><button type="button" class="btn btn-block btn-primary"><i class="fas fa-plus-square"></i> <?= $title_menu; ?></button></a>
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
                <th width="10">No</th>
                <th>News Title</th>
                <th width="30">Actions</th>
              </tr>
              </thead>
              <tbody>
                <?php if(!empty($news)) : ?>
                  <?php $no=1; foreach($news as $data) : ?>
                    <tr>
                      <td><?= $no++; ?></td>
                      <td><?= $data['title'] ?></td>
                      <td>
                        <div class="btn-group btn-group-sm">
                          <a href="#" class="btn btn-info" data-toggle="modal" data-target="#exampleModal<?= $data['slug'] ?>"><i class="fas fa-eye"></i></a>
                          <a href="<?= site_url($controllers.'/edit/'.$data['slug']) ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                          <a href="<?= site_url($controllers.'/delete/'.encrypt_url($data['id'])) ?>" onclick="return confirm('Are you sure you want to Remove?');" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </div>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                <?php endif ?>
              </tbody>
            </table>
          
          <?php if(!empty($news)) : ?>
              <?php foreach($news as $data) : ?>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal<?= $data['slug']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">View Detail</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="d-flex">
                          <div class="col-sm-2"><p>Level Name</p></div>
                          <div class="col-sm-10"><p>: <?= $data['title'] ?></p></div>
                        </div>
                        <div class="d-flex">
                          <div class="col-sm-2"><p>Description</p></div>
                          <div class="col-sm-10"><p>: <?= $data['content'] ?></p></div>
                        </div><hr class="hr">
                        <div class="d-flex">
                          <div class="col-sm-2"><p>Created At</p></div>
                          <div class="col-sm-10"><p>: <?= $data['created_at'] ?></p></div>
                        </div>
                        <?php foreach($users as $user) : ?>
                          <?php if($user['usr_id'] == $data['created_by']) : ?>
                            <div class="d-flex">
                              <div class="col-sm-2"><p>Created By</p></div>
                              <div class="col-sm-10"><p>: <?= $user['usr_fullname'] ?></p></div>
                            </div>
                          <?php endif ?>
                        <?php endforeach ?>
                        <?= $data['edited_at'] != '0000-00-00 00:00:00' ? '
                          <div class="d-flex">
                            <div class="col-sm-2"><p>Edited At</p></div>
                            <div class="col-sm-10"><p>: '.$data['edited_at'].'</p></div>
                          </div>' : null ?>
                        <?php foreach($users as $user) : ?>
                          <?php if($user['usr_id'] == $data['edited_by']) : ?>
                            <div class="d-flex">
                              <div class="col-sm-2"><p>Edited By</p></div>
                              <div class="col-sm-10"><p>: <?= $user['usr_fullname'] ?></p></div>
                            </div>
                          <?php endif ?>
                        <?php endforeach ?>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach ?>
            <?php endif ?>

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