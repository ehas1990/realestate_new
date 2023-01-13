<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	
	protectUser(10);
	
	if(!isset($_GET['key'][11]) OR trim($_GET['key'])==""){
		
		header("Location:index.php");
		exit;
	}
	
	if(!isset($_GET['u'][11]) OR trim($_GET['u'])==""){
		
		header("Location:index.php");
		exit;
	}
	
	
	$property	=	new Property();
	
		
	$result 	=	$property	->	deleteProperty(trim($_GET['key']));
	
	$result2	=	$property	->	updatePropertyCountinAgentTable(trim($_GET['u']),'0');
	
	if(isset($_GET['return'][0]) AND trim($_GET['return'])!=""){
		
		header("Location:pendingProperties.php");
		exit;
	}else
		header("Location:agentProfile.php?key=".$_GET['u']);

?>