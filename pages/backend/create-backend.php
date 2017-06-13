<?php require_once('./../../config/dbconfig.php') ?>

<?php 
	if(isset($_POST['publish'])) {
		$title = $_POST['title'];
		$content = $_POST['content'];
		$postType = $_POST['postType'];
	}

	$sql = "INSERT INTO $postType (title, content) VALUES ('$title', '$content')";
	$result = $conn->query($sql);

	if ($result) {
		header('location: add-backend.php?status="success"');
	}
	else {
		header('location: add-backend.php?status="fail"');
	}
	
?>