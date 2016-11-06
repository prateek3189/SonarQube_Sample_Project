<!DOCTYPE>
<html>
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo TITLE;?></title>
	<link href="<?php echo IMAGE_PATH_HTTP."/fev-logo.jpg";?>" type="image/x-icon" rel="icon">
  	<?php
		// Adding CSS
		if(count($AddCSS)){
			foreach($AddCSS as $css){
	?>
		<link rel="stylesheet" href="<?php echo CSS_PATH_HTTP."/".$css.".css";?>" media="screen" type="text/css" />
	<?php
			}
		}

		// Adding JS
		if(count($AddJS)){
			foreach($AddJS as $js){
	?>
		<script type="text/javascript" src="<?php echo JS_PATH_HTTP."/".$js.".js";?>"></script>
	<?php
			}
		}
	?>
</head>
<body>
<div class="main">
  <div class="header">
    <a href="dashboard.php"><img src="<?php echo IMAGE_PATH_HTTP."/logo.jpg";?>"/></a>
	<?php
		if(isset($_SESSION['login']) && $_SESSION['login'] === 1) {
	?>
		<div class="welcome_heading">Welcome <a href="<?php echo FOLDER_PATH_HTTP;?>logout.php" class="header_logout_link">Logout</a> </div>
	<?php
		}
	?>

	</div>

<?php
	include_once(NAVIGATION_PATH."/session-message.php");
?>
