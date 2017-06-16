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
                <form enctype="multipart/form-data" method="POST" role='form' name="form-addPost" action="create-backend.php">
                    <div class="form-group">
                        <label><h3>Title</h3></label>
                        <input class="form-control" type="text" name="title" placeholder="Title Here">
                    </div>

                    <div class="form-group">
                        <label><h3>Content</h3></label>
                        <textarea class="tinymce" name="content"></textarea>
                    </div>

                    <div class="form-group">
                        <label><h3>Feature Image</h3></label>
                        <input class="form-control" type="file" name="featureImage">
                    </div>

                    <div class="form-group">
                        <label><h3>Post Image</h3></label>
                        <input class="form-control" type="file" name="postImage">
                    </div>

                    <div class="youtubeLink">
                        <label><h3>Embeded Video</h3></label>
                        <input class="form-control" type="text" name="youtubeLink">
                    </div>

                    <input class='form-control' type='hidden' value=<?php echo $postType ?> name='postType'>
                    <input class='form-control' type='hidden' value=<?php echo $page ?> name='page'>

                    <button class="btn btn-primary" type="submit" name="publish">Publish</button>
                    <a href= "<?php echo 'backend.php?postType='.$postType."&page=".$page ?>">
                        <button class="btn btn-warning" type="button" role="button">Cancel</button>
                    </a>
                </form>
            </div>

        </section>
    </div>
</div>

<?php require_once('footer-backend.php') ?>