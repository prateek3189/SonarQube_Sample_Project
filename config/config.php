<?php
	//config.php for all configurations

  //Print function_exists
  function pr($arr){
    echo "<pre>";
    print_r($arr);
    die;
  }

	//session start
	session_start();

	//ERROR Reporting
	error_reporting(E_ERROR | E_WARNING | E_PARSE);

	//Default Paths
	$protocol	=	explode('/',$_SERVER['SERVER_PROTOCOL']);
	$protocol	=	strtolower($protocol[0]);
	define('HTTP_HOST', $_SERVER['HTTP_HOST']);
	define('DOCUMENT_ROOT', $_SERVER['DOCUMENT_ROOT']);

  $req_uri	=	"/SonarQube/";

  //Title
	define("TITLE",'SonarQube');

	//FOLDER PATH
	define('FOLDER_PATH_HTTP', $protocol.'://'.HTTP_HOST.$req_uri);
	define('FOLDER_PATH', rtrim(DOCUMENT_ROOT,'/').$req_uri);

	//View Path
	define('VIEW_PATH', FOLDER_PATH.'view');

	//Upload Path
	define('UPLOAD_PATH', FOLDER_PATH.'upload/');

	//Image Path
	define('IMAGE_PATH_HTTP', FOLDER_PATH_HTTP.'images');

	//CSS Path
	define('CSS_PATH_HTTP', FOLDER_PATH_HTTP.'css');

	//JS Path
	define('JS_PATH_HTTP', FOLDER_PATH_HTTP.'js');

	//Navigation Path
	define('NAVIGATION_PATH', FOLDER_PATH.'navigation');

	//CONTROLLER PATH
	define('CONTROLLER_PATH', FOLDER_PATH.'controller/');

	//CONTROLLER PATH HTTP
	define('CONTROLLER_PATH_HTTP', FOLDER_PATH_HTTP.'controller/');

	//SET INI VALUES
	define('TIMELIMIT',120);
	ini_set('max_execution_time', TIMELIMIT);

	//DATABASE DETAILS
	define("DB_HOST",'localhost');
	define("DB_USERNAME",'root');
	define("DB_PASSWORD",'');
	define("DB_NAME",'sonarqube');

	//Global veriables
	define("DB_SWITCH","OFF");

    //DB Manager
    include_once(CONTROLLER_PATH."dbmanager.php");
?>
