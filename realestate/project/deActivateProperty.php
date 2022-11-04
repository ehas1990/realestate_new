<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	
	
	if(!isset($_GET['key']{11}) OR trim($_GET['key'])==""){
		header("Location:pendingProperties.php");
		exit;
	}
	
	$property		=	new Property();
	
	$result			=	$property	->	changePropertyStatus(trim($_GET['key']),0);
	
	header("Location:activeProperties.php");
	exit;
	
	
?>