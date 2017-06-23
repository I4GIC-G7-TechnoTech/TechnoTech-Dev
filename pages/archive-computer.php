<?php
	$postType = 'computer';
	$page = 'Computer';
	define('EXCERPT_LENGTH', 360);

	require_once('header.php');
	include '../config/dbconfig.php'
?>
    	<!-- END main-navbar -->

    	<div class="archive-title">
    		<h1><?php echo $page ?></h1>
    		<hr class="main-title">
    	</div>

		<!-- post-list -->
		<div class="post-list">
			<div class="rows">
			   <?php
		            $query = mysqli_query($conn,"SELECT * FROM $postType");
		            while ($row = mysqli_fetch_assoc($query)) {
		            	$postUrl = 'single.php?postType='.$postType.'&page='.$page.'&id='.$row['id'];
		        ?>

						<div class="col-xs-12 col-md-6">
							<a href="<?php echo $postUrl ?>">
								<h3><?php echo $row['title'];?></h3>
								<img class="img-responsive img-thumbnail archive-image" src="<?php echo $row['featureImage']; ?>" alt="image">
							</a>
							<p class="exerpt">

							<?php echo substr($row['content'], 0, EXCERPT_LENGTH);?>
								<a href="<?php echo $postUrl; ?>">Read More...</a>
							</p>
						</div>

				 <?php
			        }
			    ?>
				
			<!-- END post-list -->
			</div>
   
	<div class="row">
		<!-- pagination -->
		<div class="col-sm-12 text-center">
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
	</div>

	<?php 
	require_once('footer.php');