<?php
   require APPROOT . '/views/layouts/header.php';
?>

<?php
   require APPROOT . '/views/layouts/navbar.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <div class="content">
      <div class="container pt-5">
        <div class="card mt-5 p-3">
              <div class="card-body text-center">
                <h1><b>Welcome</b></h1>
                <h4 class="card-text">to</h4>
                <h4 class="card-text">My<strong>App</strong></h4>
                <img src="<?= BASEURL; ?>/theme/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 mt-1" style="opacity: .8">
              </div>
            </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php
   require APPROOT . '/views/layouts/footer.php';
?>

