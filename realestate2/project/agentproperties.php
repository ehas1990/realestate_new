<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	
	$_GET['user_key']	=	"4b835c2391a1";
	
	$property		=	new Property();
	
	if(!isset($_GET['user_key']) OR trim($_GET['user_key'])==""){
	
		header("Location:admindashboard.php");
		exit;
	}
	
	
	//$result	=	$property	->	loadPropertiesByUserKey(trim($_GET['user_key']));
	
	$smarty->display("agentproperties.tpl");

?>