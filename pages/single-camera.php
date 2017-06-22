<?php   
    
   require_once('header.php');
    include '../config/dbconfig.php';
    $getId = $_GET['id'];
    $query = mysqli_query($conn,"SELECT * FROM camera where id = ".$getId);
    $row = mysqli_fetch_assoc($query);
 ?>
        <!-- Content -->
        <div class="archive-title">
            <h1><?php echo $row['title'];?></h1>
            <strong>Author: <em><?php echo $row['author'];?></em></strong>
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
                    <iframe width="560" height="315" src="<?php echo $row['youtubeLink'];?>" frameborder="0" allowfullscreen></iframe>
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
                    <a href="single-camera.php">
                        <img src="<?php echo $row['postImage'];?>" alt="Related Post">
                        <div class="caption">
                            <h4 class="related-title"><b></b><?php echo $row['title']; ?></b></h4>
                           
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <a href="#">
                        <img src="public/img/3.jpg" alt="Related Post">
                        <div class="caption">
                            <h4 class="related-title"><b>New 18-55mm kit lens</b></h4>
                            
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <a href="#">
                        <img src="public/img/4.jpg" alt="Related Post">
                        <div class="caption">
                            <h4 class="related-title"><b>Canon - EOS Rebel SL1</b></h4>
                           
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <a href="#">
                        <img src="public/img/5.jpg" alt="Related Post">
                        <div class="caption">
                            <h4 class="related-title"><b>Canon-EOS 5D Mark IV</b></h4>
                            
                        </div>
                    </a>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- END related-post  -->
<?php require_once('footer.php') ?>