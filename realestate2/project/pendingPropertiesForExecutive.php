<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	
	$property		=	new Property();
	
	$properties		=	$property	->	loadPropertiesByDistrictAndPanchathByStatus($_SESSION['district'],$_SESSION['panchayat'],'0');
	
	//op($properties);exit;
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	
	$smarty -> assign("properties",$properties);
	$smarty->display("pendingPropertiesForExecutive.tpl");

?>