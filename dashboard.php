<?php
	//Index.php will be the first landing page to show login box for Lead and HR
	include_once("config/config.php");

	//Add CSS
	$AddCSS	=	array("style", "jquery-ui");

	//Add JS
	$AddJS	=	array("jquery", "jquery-ui", "common");

	$page = 'GR';

	//View HTML
	include_once(VIEW_PATH."/dashboard.html");

?>
