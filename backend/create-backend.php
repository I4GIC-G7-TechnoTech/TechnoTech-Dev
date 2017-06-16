<?php 
	require_once('./../config/dbconfig.php');
	require_once('functions-backend.php');
?>

<?php 
	if(isset($_POST['publish'])) {
		$title = $_POST['title'];
		$content = $_POST['content'];
		$featureImage = '';
		$postImage = '';
		$youtubeLink = $_POST['youtubeLink'];

		$postType = $_POST['postType'];
		$page = $_POST['page'];
	}

	$sql = "INSERT INTO $postType (title, content, featureImage, postImage, youtubeLink) VALUES ('$title', '$content', '$featureImage', '$postImage', '$youtubeLink')";
	$result = $conn->query($sql);

	if ($result) {
		$featureImage = prepareUploadedImage($_FILES['featureImage'], $postType, $page);
		$postImage = prepareUploadedImage($_FILES['postImage'], $postType, $page);

		$sql = "UPDATE $postType SET featureImage = '$featureImage', postImage = '$postImage' WHERE title = '$title'";
		
		$addImage = $conn->query($sql);

		if ($addImage) {
			header('location: add-backend.php?status=success&postType='.$postType.'&page='.$page);
		}
		else {
			header('location: add-backend.php?status=fail&postType='.$postType.'&page='.$page);
		}
	}
	else {
		header('location: add-backend.php?status=fail&postType='.$postType.'&page='.$page);
	}
?>