<?php 
    require_once('header-backend.php');
    require_once('./../../functions.php');

    $postType = 'news';
?>

<!-- main-navbar -->

<div class="dashboard">

    <div class="col-xs-3 col-sm-2 col-md-2" id="navbar-backend">
        <nav>
            <div id="logo">
                <h2>TechnoTech</h2>
            </div>
            <div id="menu-backend">
                <a href="index-backend.php" title="dashboard">
                    <span class="fa fa-dashboard"></span>
                    <span class="sub-menu">Dashboard</span>
                </a>
                <a href="news-backend.php" title="news" class="active">
                    <span class="fa fa-newspaper-o"></span>
                    <span class="sub-menu">News</span>
                </a>
                <a href="computer-backend.php" title="computer">
                    <span class="fa fa-desktop"></span>
                    <span class="sub-menu">Computer</span>
                </a>
                <a href="phone-backend.php" title="phone">
                    <span class="fa fa-mobile"></span>
                    <span class="sub-menu">Phone</span>
                </a>
                <a href="camera-backend.php" title="camera">
                    <span class="fa fa-camera"></span>
                    <span class="sub-menu">Camera</span>
                </a>
                <a href="wiki-backend.php" title="Wiki">
                    <span class="fa fa-book"></span>
                    <span class="sub-menu">Wiki</span>
                </a>
            </div>
        </nav>
    </div>

    <div class="col-xs-8 col-sm-9 col-md-10">
        <section>
            <?php
                showAlertMessage();
            ?>
            <div class="head-section">
                <h1> Add News </h1>
            </div>
            <div class="form-group">
                <form method="POST" action="create-backend.php">
                    <div class="form-group">
                        <label><h3>Title</h3></label>
                        <input class="form-control" type="text" name="title" placeholder="Title Here">
                    </div>

                    <div class="form-group">
                        <label><h3>Content</h3></label>
                        <textarea class="tinymce" name="content"></textarea>
                    </div>

                    <button class="btn btn-primary" type="submit" name="publish">Publish</button>
                    <a href="news-backend.php">
                        <button class="btn btn-warning" type="button" role="button">Cancel</button>
                    </a>
                    <input class='form-control' type='hidden' value=<?php echo $postType ?> name='postType'>
                </form>
            </div>

        </section>
    </div>
</div>

<?php require_once('footer-backend.php') ?>