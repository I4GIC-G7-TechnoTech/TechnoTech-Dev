<?php  
	require_once('./../config/dbconfig.php');

	if (isset($_POST['updatePost'])) {
		$id = $_POST['id'];
		$title = $_POST['title'];
		$content = $_POST['content'];
		$postType = $_POST['postType'];

		$sql = "UPDATE $postType SET title = '$title', content = '$content', updated = NOW() WHERE id = $id";
		$result = $conn->query($sql);

		if ($result) {
			header("location: news-backend.php?status=success");
		}
		else {
			header("location: news-backend.php?status=fail");
		}
	}
?>