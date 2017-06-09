<?php require_once('./../../config/dbconfig.php') ?>

<?php 
	if(isset($_POST['publish'])) {
		$title = $_POST['title'];
		$content = $_POST['content'];
	}

	$sql = "INSERT INTO news (title, content) VALUES ('$title', '$content')";
	$result = $conn->query($sql);

	if ($result) {
		header('location: newsAdd-backend.php');

		/* Alert Message */
		echo "
				<div class='alert alert-success'>
	  				<strong>Success!</strong> Indicates a successful or positive action.
				</div>
			 ";
		
	}
	else {
		echo "Error: Post is not created";
	}
	
?>