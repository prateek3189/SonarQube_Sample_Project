<?php
	//Index.php will be the first landing page to show login box for Lead and HR
	include_once("config/config.php");

	//Add CSS
	$AddCSS	=	array("style");

	// Add JS
	$AddJS	=	array("jquery", "common");

	$page = 'ST';

	// Get data
	$select = "*";
	$table = "sq_settings";
	$where = "is_active = 1";
	$settingData = $db->select($select, $table, $where);

	//View HTML
	include_once(VIEW_PATH."/settings.html");

?>
