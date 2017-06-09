<?php 
    require_once('header-backend.php');
    require_once('./../../config/dbconfig.php');
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
                <a href="#" title="news" class="active">
                    <span class="fa fa-newspaper-o"></span>
                    <span class="sub-menu">News</span>
                </a>
                <a href="#" title="computer">
                    <span class="fa fa-desktop"></span>
                    <span class="sub-menu">Computer</span>
                </a>
                <a href="#" title="phone">
                    <span class="fa fa-mobile"></span>
                    <span class="sub-menu">Phone</span>
                </a>
                <a href="#" title="camera">
                    <span class="fa fa-camera"></span>
                    <span class="sub-menu">Camera</span>
                </a>
                <a href="#" title="Wiki">
                    <span class="fa fa-book"></span>
                    <span class="sub-menu">Wiki</span>
                </a>
            </div>
        </nav>
    </div>

    <div class="col-xs-8 col-sm-9 col-md-9">
        <section>
            <div class="head-section">
                <h1>News</h1>
                <a href="newsAdd-backend.php">
                    <button class="btn btn-primary" role="button">Add News</button>
                </a>
                <hr>
            </div>
            <div class="listNews">
                <table class="table table-striped">
                    <thead>
                        <td>Title</td>
                        <td>Auther</td>
                        <td>Created Date</td>
                    </thead>
                    <tbody>
                        <?php require_once('newsList-backend.php') ?>
                    </tbody>
                    
                </table>
            </div>
        </section>
    </div>
</div>


<?php require_once('footer-backend.php') ?>