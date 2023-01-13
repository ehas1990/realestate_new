<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	
	protectUser(10);
	

	
	if(!isset($_GET['ukey'][11]) OR trim($_GET['ukey'])==""){
		
		header("Location:listAgents.php");
		exit;
	}
	
	if(!isset($_GET['akey'][11]) OR trim($_GET['akey'])==""){
		
		header("Location:listAgents.php");
		exit;
	}
	
	$property	=	new Property();
	
	if ( $property -> checkReadyToDelete(trim($_GET['akey']))) {
		
		$result 	=	$property	->	deleteAgent(trim($_GET['ukey']),trim($_GET['akey']));
		
	}
	
	
	

	header("Location:listAgents.php");

?>