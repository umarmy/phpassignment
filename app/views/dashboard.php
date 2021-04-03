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
        <div class="card mt-5">
            <div class="card-header">
                <h3 class="card-title"><b>Private Message</b></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                    <th style="width: 10px">#</th>
                    <th>Message</th>
                    <th>Description</th>
                    <th style="width: 40px">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td>1.</td>
                    <td>Update software</td>
                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore, nihil?</td>
                    <td><span class="badge bg-danger">Delete</span></td>
                    </tr>
                    <tr>
                    <td>2.</td>
                    <td>Clean database</td>
                    <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Saepe, expedita!</td>
                    <td><span class="badge bg-warning">Unread</span></td>
                    </tr>
                    <tr>
                    <td>3.</td>
                    <td>Cron job running</td>
                    <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, ab.</td>
                    <td><span class="badge bg-primary">Read</span></td>
                    </tr>
                    <tr>
                    <td>4.</td>
                    <td>Fix and squish bugs</td>
                    <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore, et!</td>
                    <td><span class="badge bg-success">Read</span></td>
                    </tr>
                </tbody>
                </table>
            </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php
   require APPROOT . '/views/layouts/footer.php';
?>