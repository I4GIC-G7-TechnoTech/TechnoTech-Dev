<?php require_once('./../../config/dbconfig.php') ?>

<?php 
	if(isset($_POST['publish'])) {
		$title = $_POST['title'];
		$content = $_POST['content'];
		$postType = $_POST['postType'];
		$page = $_POST['page'];
	}

	$sql = "INSERT INTO $postType (title, content) VALUES ('$title', '$content')";
	$result = $conn->query($sql);

	if ($result) {
		header('location: add-backend.php?status="success"&postType='.$postType.'&page='.$page);
	}
	else {
		header('location: add-backend.php?status="fail"&postType='.$postType.'&page='.$page);
	}
	
?>