<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Admin.class.php";
	
	protectUser(10);
	
	if(!isset($_GET['tkey'][11]) OR trim($_GET['tkey'])==""){
		
		header("Location:listNewAgents.php");
		exit;
	}
	
	
	
	$admin	=	new Admin();
	
		
	$result 	=	$admin	->	deleteNewAgents(trim($_GET['tkey']));

	header("Location:listNewAgents.php");

?>