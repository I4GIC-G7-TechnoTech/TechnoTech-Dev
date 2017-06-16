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
                $result = listPost($postType, 5, $conn);
            ?>
        <!-- END: News -->

            

        <!-- wiki -->
        <div class="line section-wiki">
            <h2>Tech Wiki</h2>
            <hr>
            <div class="line main-wiki">
                <div class="col-xs-12 col-md-8">
                    <a href="single-wiki-1.html">
                        <h3>How to Fix “USB Device Not Recognized” in Windows</h3>
                    </a>
                    <p class="post-excerpt">
                        One of the common and annoying problem with USB drive in Windows is the “USB Device Not Recognized” popup message when you plug in the device into your USB port. Here are several methods to fix this problem so that you can try another one if any fix does not work for you.
                    </p>
                </div>
                <div class="col-xs-12 col-md-4">
                    <a href="single-wiki-1.html">
                        <img class="img-thumbnail img-feature" src="public/img/usb-1.jpg">
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="line sub-wiki">
                <div class="related-post">
                    <div class="col-xs-12 col-md-3 sub-post">
                        <div class="col-xs-4 col-md-12">
                            <a href="single-wiki-2">
                                <img class="img-thumbnail img-feature" src="public/img/usb-6.jpg">
                            </a>
                        </div>
                        <div class="col-xs-8 col-md-12">
                            <a href="single-wiki-2">
                                <h4 class="post-tilte">How to Fix “Windows was Unable to Complete the Format”</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 sub-post">
                        <div class="col-xs-4 col-md-12">
                            <a href="#">
                                <img class="img-thumbnail img-feature" src="public/img/how-to-hot-cpu.jpg">
                            </a>
                        </div>
                        <div class="col-xs-8 col-md-12">
                            <a href="#">
                                <h4 class="post-tilte">How to Fix Hot CPU</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 sub-post">
                        <div class="col-xs-4 col-md-12">
                            <a href="#">
                                <img class="img-thumbnail img-feature" src="public/img/win10-1.jpg">
                            </a>
                        </div>
                        <div class="col-xs-8 col-md-12">
                            <a href="#">
                                <h4 class="post-tilte">How to Upgrade to Windows 10</h4>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-3 sub-post">
                        <div class="col-xs-4 col-md-12">
                            <a href="#">
                                <img class="img-thumbnail img-feature" src="public/img/how-to-speed.jpg">
                            </a>
                        </div>
                        <div class="col-xs-8 col-md-12">
                            <a href="#">
                                <h4 class="post-tilte">How to Boost Your Computer Speed</h4>
                            </a>
                        </div>
                    </div>
                     <div class="float-right">
                        <a href="archive-wiki.html">
                            <button type="submit" class="btn btn-primary">View More >></button>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!-- END Wiki -->

        <!-- phone-and-computer -->
        <div class="line section-phone-and-computer">
            <!-- phone -->
            <div class="col-xs-12 col-md-6 phone"> 
                <h2>Phone</h2>
                <hr>
                <div class="line main-phone">
                    <div class="col-xs-6 col-md-12">
                        <a href="single-phone-1.html">
                            <h3>iPhone 8 Release Date and Rumors</h3>
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-12">
                        <a href="single-phone-1.html">
                            <img class="img-thumbnail" src="public/img/page1.jpg" alt="image">
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 sub-post">
                    <div class="col-xs-4 col-md-12">
                        <a href="sigle-phone-2.html">
                            <img class="img-thumbnail img-feature" src="public/img/page2.2.jpg">
                        </a>
                    </div>
                    <div class="col-xs-8 col-md-12">
                        <a href="single-phone-2.html">
                            <h4 class="post-tilte">Huawei P9 Price and Release Date</h4>
                        </a>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 sub-post">
                    <div class="col-xs-4 col-md-12">
                        <a href="#">
                            <img class="img-thumbnail img-feature" src="public/img/page3.jpg">
                        </a>
                    </div>
                    <div class="col-xs-8 col-md-12">
                        <a href="#">
                            <h4 class="post-tilte">Best free iPhone apps 2017</h4>
                        </a>
                    </div>
                </div>
                <div class="float-right">
                    <a href="archive-phone.html">
                        <button type="submit" class="btn btn-primary">View More >></button>
                    </a>
                </div>
            </div>
            <!-- END phone -->
            <!-- computer -->
            <div class="col-xs-12 col-md-6 phone"> 
                <h2>Computer</h2>
                <hr>
                <div class="line main-computer">
                    <div class="col-xs-6 col-md-12">
                        <a href="single-computer-1.html">
                            <h3>The 4 best laptops of 2017</h3>
                        </a>
                    </div>
                    <div class="col-xs-6 col-md-12">
                        <a href="single-computer-1.html">
                            <img class="img-thumbnail" src="public/img/pc1.jpg" alt="image">
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