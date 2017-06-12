<?php 
	require_once('./../../config/dbconfig.php');

	if (isset($_POST['deletePost'])) {
		$id = $_POST['id'];
		echo "$id";

		$sql = "DELETE FROM news WHERE id = $id";
		$result = $conn->query($sql);

		if ($result) {
			header("location: news-backend.php?status='success'");
		}
		else {
			header("location: news-backend.php?status='fail'");
		}
	}
?>