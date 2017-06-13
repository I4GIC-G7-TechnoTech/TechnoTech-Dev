<?php 
    require_once('header-backend.php');
    require_once('./../../config/dbconfig.php');
    require_once('./../../functions.php');
   
    $postType = "computer";
    $page = "Computer";

    /* display page content */ 
    require_once('template-backend.php'); 
?>

<?php require_once('footer-backend.php') ?>