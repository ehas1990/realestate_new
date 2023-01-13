<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Admin.class.php";
	include_once "../points.php";
	
	//$_GET['key']="57e4b549deac";
	
	if(!isset($_GET['key'][11]) OR trim($_GET['key'])==""){
		header("Location:listAgents.php");
		exit;
	}
	
	$admin		=	new Admin();
	
	$result		=	$admin	->	activateNewAgent(trim($_GET['key']),1);
	
	header("Location:listNewAgents.php");
	exit;
	
	
?>