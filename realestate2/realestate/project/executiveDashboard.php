<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	
	protectUser(8);
	
	//op($_SESSION);
	
	$property		=	new Property();
	
	$district			=	$property	->	loadKeyByValue("districts","district_name","district_key",$_SESSION["district"]);
	$panchayath			=	$property	->	loadKeyByValue("panchayaths","panchayath_name","panchayath_key",$_SESSION["panchayat"]);
	
	echo "<BR>district :".$district;
	
	echo "<BR>panchayath :".$panchayath;
	
	
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	$smarty->assign("district", $district);
	$smarty->assign("panchayath",$panchayath);
	$smarty->assign("user", $_SESSION['name']);
	$smarty->display("executiveDashboard.tpl");

?>