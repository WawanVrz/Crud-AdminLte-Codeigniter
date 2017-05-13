<?php include "header.php"; ?>

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
              <h3 class="box-title">Edit Master Data User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <?php foreach($edit_user as $eu){ ?>
              <form action="<?php echo base_url(). 'UsersController/update'; ?>" method="post" enctype="multipart/form-data">
                <!-- text input -->
                <div class="box-body col-lg-6">
                  <div class="form-group">
                    <label>Fullname</label>
                    <input type="hidden" name="id" value="<?php echo $eu->id_user ?>">
                    <input type="text" name="fulname" class="form-control" value="<?php echo $eu->fullname ?>">
                  </div>
                </div>

                <div class="box-body col-lg-6">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="<?php echo $eu->username ?>">
                  </div>
                </div>

                <div class="box-body col-lg-6">
                  <div class="form-group">
                    <label>Role</label>
                    <select name="role" class="form-control" style="width: 100%;">
                        <option value="<?php echo $eu->role ?>" selected="selected"><?php echo $eu->role ?></option>
                        <option value="0" disabled>Pilih Role</option>
                        <option value="Admin">Admin</option>
                        <option value="Member">Member</option>
                      </select>
                  </div>
                </div>

                <div class="box-body col-lg-6">
                  <div class="form-group">
                    <label>Telphone</label>
                      <input type="text" class="form-control" id='telp' name="telp" value="<?php echo $eu->phone ?>">
                  </div>
                </div>

                <div class="box-body col-lg-6">
                  <div class="form-group">
                    <label>Email</label>
                      <input type="email" class="form-control" id='email' name="email" value="<?php echo $eu->email ?>">
                  </div>
                </div>
                
                <div class="box-body col-lg-6">
                  <div class="form-group">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control"/>
                  </div>
                </div>
                <div class="box-body col-lg-12">
                  <div class="form-group">
                    <label>Address</label>
                      <input type="text" class="form-control" name="alamat" value="<?php echo $eu->address ?>">
                  </div>
                </div>
                <div class="box-body col-lg-12">
                  <div class="form-group">
                    <label>keterangan</label>
                      <input type="text" class="form-control" name="keterangan" value="<?php echo $eu->keterangan ?>">
                  </div>
                </div>

                <div class="form-group">
                  <input type="submit" name="submit" value="Save" class="btn btn-success">
                  <a href="<?php echo base_url('Dashboard/admin/data/user/list'); ?>"><input type="button" value="Back To View" class="btn btn-success"></a>
                  <input type="reset" name="reset" value="Cancel" class="btn btn-success">
                </div>
              </form>
              <?php } ?>
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
  
  <script type="text/javascript">
    function validasi(){
      var notelepon = document.getElementById('telp').value;
      var mail = document.getElementById('email').value;
      var number = /^[0-9]+$/;
  		var re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;

      if(!mail.match(re))
      {
        alert('Email Tidak Valid');
        return false;
      }

      if(!notelepon.match(number))
      {
        alert('No Telphone Harus Angka');
        return false;
      }

      if(notelepon.length >= 13)
      {
        alert('No Telphone Harus 12 digit');
        return false;
      }

  		return true;
    }
  </script>
<?php include "footer.php"; ?>
