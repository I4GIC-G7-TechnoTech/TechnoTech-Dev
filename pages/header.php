<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> <?php echo $page ?> </title>

	<link rel="shortcut icon" type="image/x-icon" href="public/img/logo.png"/>
	<!-- Import CSS -->
	<link rel="stylesheet" type="text/css" href="./../public/vendors/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./../public/vendors/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="./../public/css/tech.css">
</head>

<body>
    <div class="top-container">
        <?php 
            /* Navbar */
            require_once('navbar.php');
        ?>