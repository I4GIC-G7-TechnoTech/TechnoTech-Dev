<?php require_once('./../../config/dbconfig.php') ?>

<?php

	$sql = "SELECT * FROM news";
	$result = $conn->query($sql);

	if ($result) {
		while ($row = $result->fetch_object()) {
			$id = $row->id; 
?>
			<div class="news" id="<?php echo 'news'.$id ?>">
				<h4> <?php echo $row->title ?> </h4>
				<p> <?php echo $row->created ?> </p>
				<p> <?php echo $row->updated ?> </p>
			</div>

<?php	
		}
	}
	else {
		echo "No News Found!";
	}

?>