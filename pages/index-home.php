<?php 
    require_once('header.php'); 
    require_once('./../functions.php');
    require_once('./../config/dbconfig.php');
?>

<body>
	<div class="top-container">
		<?php 
            /* Navbar */
            require_once('navbar.php'); 

            /* Slider */
            require_once('slider.php');
        ?>

        <!-- news -->
        <div class="line section-news" id="section-news"> 
            <h2>Tech News</h2>
            <hr>
            <?php 
                $postType = 'news';
                $row = showLatestPost($postType, $conn);
            ?>
            <div class="line main-<?php echo $postType ?>">
                <a href="single-news-1.html">
                    <h3><?php echo $row->title ?></h3>
                </a>
                <div class="col-xs-12 col-md-4">
                    <a href="single-news-1.html">
                        <img class="img-thumbnail" src="<?php echo $row->featureImage ?>">
                    </a>
                </div>
                <div class="col-xs-12 col-md-8">
                    <?php echo $row->content ?>
                    <p>
                        <a href="single-news-1.html">Read More...</a>
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>

            <?php
                list4Posts($postType, $conn);
            ?>
        </div>
        <!-- END: News Section -->

        <!-- wiki -->
        <div class="line section-wiki">
            <h2>Tech Wiki</h2>
            <hr>
            <?php 
                $postType = 'wiki';

                $row = showLatestPost($postType, $conn);
            ?>
            <div class="line main-<?php echo $postType ?>">
                <a href="single-news-1.html">
                    <h3><?php echo $row->title ?></h3>
                </a>
                <div class="col-xs-12 col-md-8">
                    <?php echo $row->content ?>
                    <p>
                        <a href="single-news-1.html">Read More...</a>
                    </p>
                </div>
                <div class="col-xs-12 col-md-4">
                    <a href="single-news-1.html">
                        <img class="img-thumbnail" src="<?php echo $row->featureImage ?>">
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
            <?php
                list4Posts($postType, $conn);
            ?>
        </div>
        <!-- END: wiki-section -->

        <!-- phone-and-computer -->
        <div class="line section-phone-and-computer">
            
            <!-- phone -->
            <div class="col-xs-12 col-md-6 phone"> 
                <h2>Phone</h2>
                <hr>
                <?php 
                    $postType = 'phone';

                    $row = showLatestPost($postType, $conn);
                ?>
                <div class="line main-<?php echo $postType ?>">
                    <div class="col-xs-6 col-md-12">
                        <a href="single-phone-1.html">
                            <h3><?php $row->title ?></h3>
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-12">
                        <a href="single-phone-1.html">
                            <img class="img-thumbnail" src="<?php echo $row->featureImage ?>" alt="image">
                        </a>
                    </div>
                </div>

                <?php 
                    list2Posts($postType, $conn);
                ?>
                <div class="float-right">
                    <a href="archive-phone.html">
                        <button type="submit" class="btn btn-primary"> View More >> </button>
                    </a>
                </div>
            </div>
            <!-- END phone -->

            <!-- computer -->
            <div class="col-xs-12 col-md-6 computer"> 
                <h2>Computer</h2>
                <hr>
                <?php 
                    $postType = 'computer';

                    $row = showLatestPost($postType, $conn);
                    print_r($row);
                ?>
                <div class="line main-<?php echo $postType ?>">
                    <div class="col-xs-6 col-md-12">
                        <a href="single-computer-1.html">
                            <h3><?php $row->title ?></h3>
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-12">
                        <a href="single-computer-1.html">
                            <img class="img-thumbnail" src="<?php echo $row->featureImage ?> alt="image">
                        </a>
                    </div>
                </div>


                <div class="col-xs-12 col-md-6 sub-post">
                    <div class="col-xs-4 col-md-12">
                        <a href="single-computer-2.html">
                            <img class="img-thumbnail img-feature" src="public/img/pc11.jpg">
                        </a>
                    </div>
                    <div class="col-xs-8 col-md-12">
                        <a href="single-computer-2">
                            <h4 class="post-tilte">5 best gaming laptops 2017: highty recommended</h4>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 sub-post">
                    <div class="col-xs-4 col-md-12">
                        <a href="#">
                            <img class="img-thumbnail img-feature" src="public/img/pac3.jpg">
                        </a>
                    </div>
                    <div class="col-xs-8 col-md-12">
                        <a href="#">
                            <h4 class="post-tilte">Acer just launched a new gaming member</h4>
                        </a>
                    </div>
                </div>
                <div class="float-right">
                    <a href="archive-computer.html">
                        <button type="submit" class="btn btn-primary">View More >></button>
                    </a>
                </div>
            </div>

            <!-- END computer -->
            <div class="clearfix"></div>
        </div>
        <!-- END phone-and-computer -->
        <!-- END CONTENT -->
	</div>

<?php require_once('footer.php'); ?>