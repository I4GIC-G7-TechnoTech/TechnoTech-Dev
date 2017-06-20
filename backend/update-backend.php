<?php  
	require_once('./../config/dbconfig.php');
	require_once('functions-backend.php');
	echo "hello";
	if (isset($_POST['updatePost'])) {
		$id = $_POST['id'];
		$title = $_POST['title'];
		$content = $_POST['content'];
		$youtubeLink = $_POST['youtubeLink'];

		$postType = $_POST['postType'];
		$page = $_POST['page'];

		$featureImage = prepareUploadedImage($_FILES['featureImage'], $postType, $page);
		echo $featureImage;
		$postImage = prepareUploadedImage($_FILES['postImage'], $postType, $page);
		echo $postImage;

		$sql = "UPDATE $postType SET title = '$title', content = '$content', featureImage = '$featureImage', postImage = '$postImage', youtubeLink = '$youtubeLink', updated = NOW() WHERE id = $id";
		$result = $conn->query($sql);

		if ($result) {
			// header('location: backend.php?status=success&postType='.$postType.'&page='.$page);
		}
		else {
			// header('location: backend.php?status=fail&postType='.$postType.'&page='.$page);
		}
	}
?>