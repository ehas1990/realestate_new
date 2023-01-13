<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	
	
	if(!isset($_GET['key'][11]) OR trim($_GET['key'])==""){
		header("Location:index.php");
		exit;
	}
	if(!isset($_GET['u'][11]) OR trim($_GET['u'])==""){
		header("Location:index.php");
		exit;
	}
	
	$property		=	new Property();
	
	$result		=	$property	->	changePropertyStatus(trim($_GET['key']),0);
	
	header("Location:agentProfile.php?key=".$_GET['u']);
	exit;
	
	
?>