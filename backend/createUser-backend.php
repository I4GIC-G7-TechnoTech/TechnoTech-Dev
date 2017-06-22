<?php 
	require_once('./../config/dbconfig.php');
	require_once('salt.php');
	require_once('header-backend.php');
	require_once('functions-backend.php');

	if (isset($_POST['create'])) {
		$postType = 'user';
		$page = 'User';

		$fullName = $_POST['fullname'];
		$username = $_POST['username'];

		if ($_POST['password'] == $_POST['re-password']) {
			$password = crypt($_POST['password'], KEY_SALT);
			header('location: addUser-backend.php?status=success&postType='.$postType.'&page='.$page);
		}
		else {
			header('location: addUser-backend.php?status=fail&postType='.$postType.'&page='.$page);
		}

		$sql = "INSERT INTO user (fullname, username, password) VALUES ('$fullName', '$username', '$password')";
		$result = $conn->query($sql);
	}
	else {
		header('location: addUser-backend.php?status=fail&postType='.$postType.'&page='.$page);
	}

	require_once('footer-backend.php');
?>