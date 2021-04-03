 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container d-flex justify-content-between">
        <div class="d-flex align-items-center">
            <a href="<?= BASEURL; ?>" class="navbar-brand">
                <img src="<?= BASEURL; ?>/theme/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">MyApp</span>
            </a>
            <?php if(isset($_SESSION['user_id'])) : ?>
            <a href="<?= BASEURL; ?>/dashboard">Dashboard</a>
            <?php endif; ?>
        </div>
        <?php if(isset($_SESSION['user_id'])) : ?>
            <div class="user-panel d-flex align-items-center">
                <div class="image">
                <img src="<?= BASEURL; ?>/theme/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <p class="d-block mb-0"><span><?= $_SESSION['username'] ?></span></p>
                </div>
                <div>
                    <form action="<?= BASEURL; ?>/logout" method="post">
                        <button type="submit" class="btn btn-link btn-sm">Logout</button>
                    </form>
                </div>
            </div>
        <?php else : ?>
            <a href="<?= BASEURL; ?>/login" class="nav-link">Login</a>
        <?php endif; ?>
    </div>
</nav>
  <!-- /.navbar -->
