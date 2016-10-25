<?php 
	//Index.php will be the first landing page to show login box for Lead and HR
	include_once("config/config.php");
	
	unset($_SESSION['user_id']);
	unset($_SESSION['name']);
	unset($_SESSION['user_type']);
	unset($_SESSION['login']);
	unset($_SESSION['last_visited']);
	unset($_SESSION['error_message']);
	
	@session_destroy();
	
	header("Location: index.php");
	die;
?>
