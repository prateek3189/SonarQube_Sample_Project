<?php
	//Index.php will be the first landing page to show login box for Lead and HR
	include_once("config/config.php");

	//Add CSS
	$AddCSS	=	array("style");

	// Add JS
	$AddJS	=	array("jquery", "common");

	$page = 'ST';

	//View HTML
	include_once(VIEW_PATH."/settings.html");

?>
