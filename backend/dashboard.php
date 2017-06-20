<?php 
    // session_start();
    // if (!isset($_SESSION['username'])) {
    //     header('Location: login-backend.php');
    // }

    $postType = 'dashboard';
    $page = 'Dashboard';

    require_once('header-backend.php');
?>

<div class="dashboard">

    <!-- display navbar for backend -->
    <?php require_once('navbar-backend.php') ?>

    <div class="col-xs-8 col-sm-8 col-md-10">
        <section>
            <div class="head-section">
                <h1><?php echo $page ?></h1>
            </div>
        </section>
    </div>
</div>

<?php require_once('footer-backend.php') ?>