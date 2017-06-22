<?php
    if (isset($_POST['page'])) {
        $page = $_POST['page'];
        $postType = $_POST['postType'];
    }
    else {
        $page = $_GET['page'];
        $postType = $_GET['postType']; 
    }
 
    require_once('header-backend.php');
    require_once('functions-backend.php');
?>

<!-- main-navbar -->

<div class="dashboard">
    <!-- display navbar for backend -->
    <?php require_once('navbar-backend.php') ?>

    <div class="col-xs-8 col-sm-9 col-md-10">
        <section>
            <?php
                showAlertMessage();
            ?>
            <div class="head-section">
                <h1> Add <?php echo $page ?> </h1>
            </div>
            <div class="form-group">
                <form enctype="multipart/form-data" method="POST" role='form' name="form-addPost" action="createUser-backend.php">
                    <div class="form-group">
                        <label><h3>Full Name</h3></label>
                        <input class="form-control" type="text" name="fullname" placeholder="Full Name" required="">
                    </div>

                    <div class="form-group">
                        <label><h3>Username</h3></label>
                        <input class="form-control" type="text" name="username" placeholder="Username" required="">
                    </div>

                    <div class="form-group">
                        <label><h3>Password</h3></label>
                        <input class="form-control" type="password" name="password" placeholder="Password" required="">
                        <input class="form-control" type="password" name="re-password" placeholder="Confirm Password" required="">
                    </div>

                    <!-- <div class="form-group">
                        <label><h3>Profile Picture</h3></label>
                        <input class="form-control" type="file" name="profilePic" required="">
                    </div> -->

                    <button class="btn btn-primary" type="submit" name="create">Create</button>
                    <a href= "<?php echo 'backend.php?postType='.$postType."&page=".$page ?>">
                        <button class="btn btn-warning" type="button" role="button">Cancel</button>
                    </a>
                </form>
            </div>

        </section>
    </div>
</div>

<?php require_once('footer-backend.php') ?>