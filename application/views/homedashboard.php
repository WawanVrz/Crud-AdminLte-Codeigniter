<?php include "header.php"; ?>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <div class="col-lg-12 col-xs-12">
         <div class="box box-info">
           <div class="box-header">
             <i class="fa fa-dashboard"></i>
             <h3 class="box-title">WELCOME : <b> Administrator </b></h3>
             <div class="pull-right box-tools">
             </div>
           </div>
           <div class="box-body">
                   Selamat Datang <br><br>
                   Hai Administrator , selamat datang di halaman Administrator.<br>
                   Silahkan klik menu pilihan yang berada di sebelah kiri untuk mengelola konten website anda.<br>
                 </div>
                 <div class="box-footer clearfix">
                  <p align="right">
                   <?php
                      date_default_timezone_set("Asia/Jakarta");
                      $today = date("j F Y | h:i:s a");
                      echo "Tanggal : $today"
                   ?>
                 </p>
                 </div>
               </div>
           </div>
        <!-- Left col -->
      </div>
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include "footer.php"; ?>
