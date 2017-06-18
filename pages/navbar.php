<!-- main-navbar -->
<div class="main-navbar">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home-page.html">
                    <img alt="TechnoTech" src="" alt="logo">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="index-home.php">Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="archive-news.html">News <span class="sr-only">(current)</span></a></li>
                    <li><a href="archive-wiki.html">Tech Wiki <span class="sr-only">(current)</span></a></li>
                    <li><a href="archive-phone.html">Phone <span class="sr-only">(current)</span></a></li>
                    <li><a href="archive-computer.html">Computer <span class="sr-only">(current)</span></a></li>
                    <li><a href="archive-camera.html">Camera <span class="sr-only">(current)</span></a></li>
                    <li><a href="about-us.html">About us <span class="sr-only">(current)</span></a></li>
                </ul>
                <form class="navbar-form navbar-right" method="POST" name="search-form" action="search.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="keyword" placeholder="Search">
                    </div>
                    <button type="submit" name="search" class="btn btn-default"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
<!-- END main-navbar -->