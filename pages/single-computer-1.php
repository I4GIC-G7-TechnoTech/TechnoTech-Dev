<?php   
   require_once('header.php');
    include '../config/dbconfig.php';
    $getId = $_GET['id'];
    $query = mysqli_query($conn,"SELECT * FROM computer where id = ".$getId);
    $row = mysqli_fetch_assoc($query);
 ?>
        <!-- Content -->
        <div class="archive-title">
            <h1><?php echo $row['title'];?></h1>
            <strong>Author: <em>Sak Sothea</em></strong>
            <hr class="main-title">
        </div>
        <div class="col-sm-12 post-content">
            <p>
                <?php echo $row['content'];?>
            </p>
                
            <div class="clearfix"></div>
            <div class="col-xs-12 col-sm-8 col-md-12 line">
                <!-- embedded-video -->
                <div class="embed-responsive embed-responsive-16by9 video-wiki">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/9bTAwbmCd1A" frameborder="0" allowfullscreen></iframe>
                </div>
                <!-- End embedded-video -->
            </div>
        </div>
        <!-- related-post -->
        <div class="related-post">
        <br/>
            <h3>Related Posts</h3>
            <hr>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <a href="single-computer-2.html">
                        <img src="public\img\pc11.jpg" alt="Related Post">
                        <div class="caption">
                            <h4 class="related-title">5 best gaming laptops 2017: top gaming notebook reviews</h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <a href="#">
                        <img src="public/img/pac7.jpg" alt="Related Post">
                        <div class="caption">
                            <h4 class="related-title">Alienware 17 R3 Futuristic Design - 2017- best</h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <a href="#">
                        <img src="public/img/pac8.jpg" alt="Related Post">
                        <div class="caption">
                            <h4 class="related-title">360 degree laptop for you life 2017- latest design</h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <a href="#">
                        <img src="public/img/pac9.jpg" alt="Related Post">
                        <div class="caption">
                            <h4 class="related-title">Triple-screen gaming computer best for gamer 2018</h4>
                        </div>
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- END related-post  -->
    </div>
    <!-- End top-container -->
<?php require_once('footer.php') ?>