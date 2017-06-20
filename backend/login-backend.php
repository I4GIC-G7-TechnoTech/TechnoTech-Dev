<?php  
	session_start();
	if (isset($_COOKIE['username'])) {
		$_SESSION['username'] = $_COOKIE['username'];
		header('Location: dashboard.php');
	}

	require_once('header-backend.php');
?>

<div id="login">
	<div id="head-section">
		<h1 id="site-title"> TechnoTech Dashboard </h1>
		<hr id="headline">

		<form class="form-group" role='form' method="POST" name="loginForm" action="accountLogin.php">
			<div class="form-group">
				<label>Username</label>
				<input class="form-control" type="text" name="username" autofocus='autofocus' placeholder="Username" required>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input class="form-control" type="password" name="password" placeholder="Password" required>
			</div>
			<div class="form-group">
				<input type="checkbox" value="remember" name="r"> Don't Forget Me TT
			</div>
			<button class="btn btn-default sign-in" type="submit" name="login">Login</button>
		</form>
		
	</div>
</div>

<?php  
	require_once('footer-backend.php');
?>