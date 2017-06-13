<?php 
	$postType = "wiki";
    $page = "Wiki";

    require_once('header-backend.php');
    require_once('./../../config/dbconfig.php');
    require_once('./../../functions.php');
   
    /* display page content */ 
    require_once('template-backend.php'); 
?>

<?php require_once('footer-backend.php') ?>