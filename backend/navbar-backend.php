<?php 
    $news = '';
    $computer = '';
    $phone = '';
    $camera = '';
    $wiki = '';

    /* determine native tab of navbar */
    switch ($postType) {
        case 'news':
            $news = 'class="active"';
        break;
        case 'computer':
            $computer = 'class="active"';
        break;
        case 'phone':
            $phone = 'class="active"';
        break;
        case 'camera':
            $camera = 'class="active"';
        break;
        case 'wiki':
            $wiki = 'class="active"';
        break;
    }
?>

<!-- main-navbar -->
<div class="col-xs-3 col-sm-4 col-md-2" id="navbar-backend">
    <nav>
        <div id="logo">
            <h2>TechnoTech</h2>
        </div>
        <div id="menu-backend">
            <a href="index-backend.php" title="dashboard">
                <span class="fa fa-dashboard"></span>
                <span class="sub-menu">Dashboard</span>
            </a>
            <a href="news-backend.php" title="news" <?php echo $news ?>>
                <span class="fa fa-newspaper-o"></span>
                <span class="sub-menu">News</span>
            </a>
            <a href="computer-backend.php" title="computer" <?php echo $computer ?>>
                <span class="fa fa-desktop"></span>
                <span class="sub-menu">Computer</span>
            </a>
            <a href="phone-backend.php" title="phone" <?php echo $phone ?>>
                <span class="fa fa-mobile"></span>
                <span class="sub-menu">Phone</span>
            </a>
            <a href="camera-backend.php" title="camera" <?php echo $camera ?>>
                <span class="fa fa-camera"></span>
                <span class="sub-menu">Camera</span>
            </a>
            <a href="wiki-backend.php" title="Wiki" <?php echo $wiki ?>>
                <span class="fa fa-book"></span>
                <span class="sub-menu">Wiki</span>
            </a>
        </div>
    </nav>
</div>