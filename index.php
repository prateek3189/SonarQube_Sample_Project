<?php
    //Index.php will be the first landing page to show login box for Lead and HR
    include("config/config.php");

    // Check session
    include(FOLDER_PATH."session_check_login.php");

    //Add JS
	$AddJS	=	array("jquery", "common");

    //Add CSS
	$AddCSS	=	array("style");

	//View HTML
	include(VIEW_PATH."/index.html");

?>
