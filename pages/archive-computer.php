<?php
	require_once('header.php');
	include '../config/dbconfig.php'
?>
    	<!-- END main-navbar -->

    	<div class="archive-title">
    		<h1>COMPUTER</h1>
    		<hr class="main-title">
    	</div>

		<!-- post-list -->
		<div class="post-list">
			<div class="rows">
			   <?php
		            $query = mysqli_query($conn,"SELECT * FROM computer");
		            while ($row = mysqli_fetch_assoc($query)) {
		        ?>
				<div class="col-xs-12 col-md-6">
					<a href="single-computer-1.php?id='<?php echo $row['id'];?>'">
						<h3><?php echo $row['title'];?></h3>
						<img class="img-responsive img-thumbnail archive-image" src="public\img\pc1.jpg" alt="image">
					</a>
					<p class="exerpt">
					<?php echo $row['content'];?>
						<a href="single-computer-1.php?id='<?php echo $row['id'];?>'">Read More...</a>
					</p>
				</div>
				 <?php
			            }
			     ?>
				<div class="col-xs-12 col-md-6">
					<a href="single-computer-2.html">
						<h3>5 best gaming laptops 2017: highty recommended</h3>
						<img class="img-responsive img-thumbnail archive-image" src="public/img/pc11.jpg" alt="image">
					</a>
					<p class="exerpt">
						A rigorous machine that can handle any game at max settings, outperforming the latest consoles would be cheaper to build. But that’s a daunting, and frankly unnecessary, task for anyone more interested in playing games than tinkering with hardware.<a href="single-computer-2.html">Read More...</a>
					</p>
				</div>
				<div class="clearfix"></div>
			</div>
			
			<div class="rows row-2">
				<div class="col-xs-12 col-md-6">
					<a href="#">
						<h3>Acer just launched a new gaming member</h3>
						<img class="img-responsive img-thumbnail archive-image" src="public/img/pac3.jpg" alt="image">
					</a>
					<p class="exerpt">
						 Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<a href="#">Read More...</a>
					</p>
				</div>
				<div class="col-xs-12 col-md-6">
					<a href="#">
						<h3>Apple vs Dell </h3>
						<img class="img-responsive img-thumbnail archive-image" src="public/img/pac4.jpg" alt="image">
					</a>
					<p class="exerpt">
					Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<a href="#">Read More...</a>
					</p>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="rows">
				<div class="col-xs-12 col-md-6">
					<a href="#">
						<h3>Apple comes again with its new fighter</h3>
						<img class="img-responsive img-thumbnail archive-image" src="public/img/pac5.jpg" alt="image">
					</a>
					<p class="exerpt">
						 Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<a href="#">Read More...</a>
					</p>
				</div>
				<div class="col-xs-12 col-md-6">
					<a href="#">
						<h3>360 degree computer for 2017</h3>
						<img class="img-responsive img-thumbnail archive-image" src="public/img/pac6.jpg" alt="image">
					</a>
					<p class="exerpt">
						 Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.<a href="#">Read More...</a>
					</p>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- END post-list -->


		<!-- pagination -->
		<div class="text-center">
			<ul class="pagination">
				<li><a href="#"><<</a></li>
	  			<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">>></a></li>
			</ul>
		</div>
		<!-- END pagination -->
	</div>

	<?php 
	require_once('footer.php');