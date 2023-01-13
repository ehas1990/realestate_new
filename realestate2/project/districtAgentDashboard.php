<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	
	protectUser(9);
	
	
	
	$property		=	new Property();
	
	$district			=	$property	->	loadKeyByValue("districts","district_name","district_key",$_SESSION["district"]);
	
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	$smarty->assign("district", $district);
	$smarty->assign("districtKey",$_SESSION["district"]);
	$smarty->assign("user", $_SESSION['name']);
	$smarty->display("districtAgentDashboard.tpl");

?>