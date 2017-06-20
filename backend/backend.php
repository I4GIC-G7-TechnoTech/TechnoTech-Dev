<?php 
    $postType = $_GET['postType'];
    $page = $_GET['page'];

    require_once('header-backend.php');
    require_once('./../config/dbconfig.php');
    require_once('functions-backend.php');
?>

<div class="dashboard">

    <!-- display navbar for backend -->
    <?php require_once('navbar-backend.php') ?>

    <div class="col-xs-8 col-sm-8 col-md-10">
        <section>
            <?php
                showAlertMessage();
            ?>
            <div class="head-section">
                <h1><?php echo $page ?></h1>
                <form method="POST" action="add-backend.php">
                    <input type="hidden" name="postType" value="<?php echo $postType ?>">
                    <input type="hidden" name="page" value="<?php echo $page ?>">
                    <button class="btn btn-primary" type="submit" name="submit">Add <?php echo $page ?></button>
                </form>
                <hr>
            </div>
            <div class= "<?php echo 'list'.$postType ?>">
                <table class="table table-striped">
                    <thead>
                        <td><strong>Title</strong></td>
                        <td><strong>Author</strong></td>
                        <td><strong>Created On</strong></td>
                        <td><strong>Updated On</strong></td>
                        <td><strong>Action</strong></td>
                    </thead>
                    <tbody>
                        <?php listRecords($postType, $page, $conn); ?>
                    </tbody>
                    
                </table>
            </div>
        </section>
    </div>
</div>

<?php require_once('footer-backend.php') ?>