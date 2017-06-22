<?php 
    $dashboard = '';
    $news = '';
    $computer = '';
    $phone = '';
    $camera = '';
    $wiki = '';
    $user = '';

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

        case 'user':
            $user = 'class="active"';
        break;

        default:
            $dashboard = 'class="active"';
        break;
    }

    $urlNews = 'backend.php?postType=news&page=TechNews';
    $urlComputer = 'backend.php?postType=computer&page=Computer';
    $urlPhone = 'backend.php?postType=phone&page=Phone';
    $urlCamera = 'backend.php?postType=camera&page=Camera';
    $urlWiki = 'backend.php?postType=wiki&page=TechWiki';
    $urlUser = 'backend.php?postType=user&page=User';
?>

<!-- main-navbar -->

<div class="col-xs-3 col-sm-4 col-md-2" id="navbar-backend">
    <nav>
        <div id="logo">
            <h2>TechnoTech</h2>
        </div>
        <div id="menu-backend">
            <a href="dashboard.php" title="dashboard" <?php echo $dashboard ?>>
                <span class="fa fa-dashboard"></span>
                <span class="sub-menu">Dashboard</span>
            </a>
            <a href="<?php echo $urlNews ?>" title="news" <?php echo $news ?>>
                <span class="fa fa-newspaper-o"></span>
                <span class="sub-menu">News</span>
            </a>
            <a href="<?php echo $urlComputer ?>" title="computer" <?php echo $computer ?>>
                <span class="fa fa-desktop"></span>
                <span class="sub-menu">Computer</span>
            </a>
            <a href="<?php echo $urlPhone ?>" title="phone" <?php echo $phone ?>>
                <span class="fa fa-mobile"></span>
                <span class="sub-menu">Phone</span>
            </a>
            <a href="<?php echo $urlCamera ?>" title="camera" <?php echo $camera ?>>
                <span class="fa fa-camera"></span>
                <span class="sub-menu">Camera</span>
            </a>
            <a href="<?php echo $urlWiki ?>" title="Wiki" <?php echo $wiki ?>>
                <span class="fa fa-book"></span>
                <span class="sub-menu">Wiki</span>
            </a>
            <a href="<?php echo $urlUser ?>" title="UserAccount" <?php echo $user ?>>
                <span class="fa fa-user-circle"></span>
                <span class="sub-menu">User</span>
            </a>
            <a href="logout-backend.php">
                <span class="fa fa-user-circle"></span>
                <span class="sub-menu">Logout</span>
            </a>
        </div>
    </nav>
</div>