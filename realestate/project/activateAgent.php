<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Admin.class.php";
	
	
	if(!isset($_GET['key']{11}) OR trim($_GET['key'])==""){
		header("Location:listAgents.php");
		exit;
	}
	
	$admin		=	new Admin();
	
	$result		=	$admin	->	changeAgentStatus(trim($_GET['key']),1);
	
	header("Location:listAgents.php");
	exit;
	
	
?>