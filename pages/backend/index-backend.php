<?php require_once('header-backend.php') ?>

<!-- main-navbar -->

<div class="dashboard">
    <div class="col-xs-3 col-sm-3 col-md-2" id="navbar-backend">
        <nav>
            <div id="logo">
                <h2>TechnoTech</h2>
            </div>
            <div id="menu-backend">
                <a href="index-backend.php" title="dashboard" class="active">
                    <span class="fa fa-dashboard"></span>
                    <span class="sub-menu">Dashboard</span>
                </a>
                <a href="news-backend.php" title="news">
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

    <div class="col-xs-8 col-sm-9 col-md-10">
        <section>
            <h1> Dashboard </h1>
            <form>
                <div class="form-group">
                    <label><h3>Title</h3></label>
                    <input class="form-control" type="text" name="title" placeholder="Title Here">
                </div>
                <div class="form-group">
                    <label><h3> Content</label>
                    <textarea class="tinymce"></textarea>
                </div>
            </form>
        </section>
    </div>
</div>


<?php require_once('footer-backend.php') ?>