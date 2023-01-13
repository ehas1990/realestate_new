<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	
	protectUser(10);
	
	$property		=	new Property();
	
	$properties		=	$property	->	loadPropertiesByStatus('0');
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	
	$smarty -> assign("properties",$properties);
	$smarty->display("pendingProperties.tpl");

?>