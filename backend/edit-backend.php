<?php
    if (isset($_POST['page'])) {
        $page = $_POST['page'];
        $postType = $_POST['postType'];
        $id = $_POST['id'];
    }
    else {
        $page = $_GET['page'];
        $postType = $_GET['postType']; 
        $id = $_GET['postType'];
    }
 
    require_once('header-backend.php');
    require_once('./../config/dbconfig.php');
    require_once('functions-backend.php');
    $sql = "SELECT * FROM $postType WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_object();
?>


<div class="dashboard">
    <!-- display navbar for backend -->
    <?php require_once('navbar-backend.php') ?>

    <div class="col-xs-8 col-sm-9 col-md-10">
        <section>
            <?php
                showAlertMessage();
            ?>
            <div class="head-section">
                <h1> Edit <?php echo $page ?> </h1>
            </div>
            <div class="form-group">
                <form enctype="multipart/form-data" method="POST" role='form' name="form-addPost" action="update-backend.php">
                    <div class="form-group">
                        <label><h3>Title</h3></label>
                        <input class="form-control" type="text" name="title" placeholder="Title Here" value="<?php echo $row->title ?>">
                    </div>

                    <div class="form-group">
                        <label><h3>Content</h3></label>
                        <textarea id="wysiwyg" name="content"><?php echo $row->content ?></textarea>
                        
                    </div>

                    <div class="form-group">
                        <label><h3>Feature Image</h3></label>
                        <div class="row">
                            <div class="col-md-3">
                                <img class="img-thumbnail img-feature" src="<?php echo $row->featureImage ?>">
                            </div>
                            <div class="col-md-9">
                                <input class="form-control" type="file" name="featureImage">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label><h3>Post Image</h3></label>
                        <!-- update Post Image -->
                        <div class="row">
                            <div class="col-md-3">
                                <img class="img-thumbnail img-post" src="<?php echo $row->postImage ?>">
                            </div>
                            <div class="col-md-9">
                                <input class="form-control" type="file" name="postImage">
                            </div>
                        </div>
                    </div>

                    <div class="youtubeLink">
                        <label><h3>Embeded Video</h3></label>
                        <input class="form-control" type="text" name="youtubeLink" value="<?php echo $row->youtubeLink ?>">
                    </div>

                    <input class='form-control' type='hidden' value=<?php echo $id ?> name='id'>
                    <input class='form-control' type='hidden' value=<?php echo $postType ?> name='postType'>
                    <input class='form-control' type='hidden' value=<?php echo $page ?> name='page'>

                    <div class="buttons">
                        <button class="btn btn-primary" type="submit" name="updatePost">Update</button>
                        <a href= "<?php echo 'backend.php?postType='.$postType."&page=".$page ?>">
                            <button class="btn btn-warning" type="button" role="button">Cancel</button>
                        </a>
                    </div>
                </form>
            </div>

        </section>
    </div>
</div>

<?php require_once('footer-backend.php') ?>