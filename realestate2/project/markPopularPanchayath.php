<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	
	protectUser(10);
	$property	=	new Property();
	
	if(!isset($_GET['key'][11]) OR trim($_GET['key'])==""){
		
		header("Location:panchayathSettings.php");
		exit;
	}else{
		
		if (	$result = $property	->	markPopularPanchayat(trim($_GET['key']),'1') ){
			
			header("Location:panchayathSettings.php");
			exit;
			
		}
	}
	
?>