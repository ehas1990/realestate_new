<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	
	protectUser(5);
	
	$property		=	new Property();
	
	$properties		=	$property	->	loadPropertiesByAgentKey($_SESSION['user_key']);
	
	
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	
	$smarty -> assign("properties",$properties);
	$smarty->display("viewMyProperties.tpl");

?>