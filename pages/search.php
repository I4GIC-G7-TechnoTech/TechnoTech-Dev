<?php  
	require_once('./../config/dbconfig.php');
	require_once('header.php');
	require_once('./../functions.php');

	if(isset($_POST['keyword'])) {
		$keyword = $_POST['keyword'];
	}
	
	$postTypes = array('news', 'computer', 'phone', 'camera', 'wiki');
?>

<div class="archive-title">
	<h1>Search</h1>
	<hr>
</div>

<div class="row">
	<?php
		$havePost = searchEachPostType($postTypes, $keyword, $conn);

		if(!$havePost) {
			echo "No Post Found!";
		}
    ?>
</div>

<?php
	require_once('footer.php');
?>

