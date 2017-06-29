<?php 
	require_once('./../config/dbconfig.php');
	require_once('salt.php');
	// Mardy

	if (isset($_POST['login']) && $_POST['username']!='') {
		$username = $_POST['username'];
		$password = crypt($_POST['password'], KEY_SALT);

		$sql = "SELECT *
				FROM user 
				WHERE username = '$username' AND password = '$password'";	
		$result = $conn->query($sql);


		if ($result->num_rows > 0) {
			session_start();
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;

			if ($_POST['r'] == 'remember') {
				setcookie('username', $username, time()+60*60*24);
			}
			header('Location: dashboard.php?status=success');
		}
		else {
			header('Location: login-backend.php?status=fail');
		}
	}
	else {
		header('Location: login-backend.php?status=fail');
	}
?>