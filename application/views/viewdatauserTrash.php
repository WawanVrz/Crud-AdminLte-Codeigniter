<?php include "Header.php"; ?>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-12">
          <!-- TO DO List -->
          <div class="box box-primary">
            <div class="box-header">
              <i class="fa fa-database"></i>
              <h3 class="box-title">Master Data Jenis Users In Bin</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                  <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                      <a href="<?php echo base_url('Dashboard/admin/data/user/list'); ?>">All (<?php echo $this->session->userdata("user_jumlah"); ?>)</a> | <a href="<?php echo base_url('Dashboard/admin/data/user/list/bin'); ?>">Trash (<?php echo $this->session->userdata("jumlah_sampah_user"); ?>)</a>
                          <hr>
                          <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                             <th>No</th>
                              <th>Image</th>
                              <th>Fullname</th>
                              <th>Username</th>
                              <th>Phone</th>
                              <th>Email</th>
                              <th>Keterangan</th>
                              <th width="18%">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php
                                $no = 1;
                                foreach ($userss_bin as $u) {
                              ?>
                            <tr id="row-<?= $u->id_user ?>">
                              <td><?php echo $no++ ?></td>
                              <td><img class="profile-user-img img-responsive img-circle" src="assets/dashboard/dist/img/<?php echo $u->image ?>"></td>
                              <td><?php echo $u->fullname ?></td>
                              <td><?php echo $u->username ?></td>
                              <td><?php echo $u->phone ?></td>
                              <td><?php echo $u->email ?></td>
                              <td><?php echo $u->keterangan ?></td>
                              <td align="center">
                                <button class="btn btn-warning btn-sm" onClick="RestoreData(<?= $u->id_user ?>)"><i class="glyphicon glyphicon-repeat"></i>&nbsp; Restore</button>
                                <button class="btn btn-danger btn-sm" onClick="deleteData(<?= $u->id_user ?>)"><i class="glyphicon glyphicon-remove"></i>&nbsp; Delete</button>
                              </td>
                            </tr>
                            <?php } ?>
                            </tbody>
                            <tfoot>
                            <tr>
                              <th>No</th>
                              <th>Image</th>
                              <th>Fullname</th>
                              <th>Username</th>
                              <th>Phone</th>
                              <th>Email</th>
                              <th>Keterangan</th>
                              <th width="18%">Actions</th>
                            </tr>
                            </tfoot>
                          </table> 
                    </div>

                </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </section>
      </div>
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script>
    function deleteData(id) {
        swal({
          title: "Are you sure?",
          text: "You will not be able to recover this Data!",
          type: "warning",
          showCancelButton: true,
          confirmButtonClass: 'btn-danger',
          confirmButtonText: 'Yes, delete it!',
          closeOnConfirm: false,
          closeOnCancel: true
        },
        function() {
            $.get('<?php echo base_url('UsersController/hapus/'); ?>', {id:id}, function(data) {
              if (data == 'succeed') {
                  $('#row-' + id).remove();
                  swal("Deleted!", "Your Data has been deleted!", "success");
              }
            });
        });
    }
    function handleClickUpdate(e){
      e.preventDefault();
    }
  </script>

  <script>
    function RestoreData(id) {
        swal({
          title: "Are you sure?",
          text: "You will Restore this Data!",
          type: "warning",
          showCancelButton: true,
          confirmButtonClass: 'btn-success',
          confirmButtonText: 'Yes, Restore it!',
          closeOnConfirm: false,
          closeOnCancel: true
        },
        function() {
            $.get('<?php echo base_url('UsersController/restoredelete/'); ?>', {id:id}, function(data) {
              if (data == 'succeed') {
                  $('#row-' + id).remove();
                  swal("Restore!", "Your Data has been Restore!", "success");
              }
            });
        });
    }
    function handleClickUpdate(e){
      e.preventDefault();
    }
  </script>

<?php include "Footer.php"; ?>
