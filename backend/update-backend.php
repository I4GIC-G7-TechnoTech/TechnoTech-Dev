<?php  
	require_once('./../config/dbconfig.php');
	require_once('functions-backend.php');
	echo "hello";
	if (isset($_POST['updatePost'])) {
		$id = $_POST['id'];
		$title = $_POST['title'];
		$content = $_POST['content'];
		$youtubeLink = $_POST['youtubeLink'];

		$featureImage = $_POST['featureImage'];
		$postImage = $_POST['postImage'];


		$postType = $_POST['postType'];
		$page = $_POST['page'];
		$imageType = $_FILES['postImage'];	


		$featureImage = updateUploadImage($id, $_FILES['featureImage'], $featureImage, $postType, $page, $conn);

		$postImage = updateUploadImage($id, $_FILES['postImage'], $postImage, $postType, $page, $conn);


		$sql = "UPDATE $postType SET title = '$title', content = '$content', featureImage = '$featureImage', postImage = '$postImage', youtubeLink = '$youtubeLink', updated = NOW() WHERE id = $id";
		echo $sql;
		$result = $conn->query($sql);



		if ($result) {
			header('location: edit-backend.php?status=success&postType='.$postType.'&page='.$page.'&id='.$id);
		}
		else {
			header('location: edit-backend.php?status=fail&postType='.$postType.'&page='.$page.'&id='.$id);
		}
	}
?>