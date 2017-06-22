<?php  
	session_start();
	if (isset($_SESSION['username'])) {
		setcookie('username', '', time()-3600, "/");
		session_destroy();
	}
	header('Location: login-backend.php');
?>