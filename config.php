<?php

	ob_start();
	session_start();

	define('DB_SERVER','127.0.0.1');
	define('DB_USER','root');
	define('DB_PASSWORD','');
	define('DB_NAME','cms_project');


	$conn = @mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
	if(!$conn){
		die( "Sorry, a problem occurred. Please try later.");
	}
	define('DIR','http://127.0.0.1/BIT_SPRINT_8_CMS/');
	define('DIRADMIN','http://127.0.0.1/BIT_SPRINT_8_CMS/admin/');
	define('SITETITLE','Food Spot');
	define('included', 1);
	
	include('admin.php');
?>

