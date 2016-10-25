<?php 
	//Index.php will be the first landing page to show login box for Lead and HR
	include_once("config/config.php");
	
	if(!isset($_SESSION['login']) && ($_SESSION['login']!='1')  ){
		header("Location:index.php");
		die;
	}
	
?>
