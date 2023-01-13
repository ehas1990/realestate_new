<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	
	protectUser(10);
	
	if(!isset($_GET['key'][11]) OR trim($_GET['key'])==""){
		
		header("Location:listAgents.php");
		exit;
	}
	
	$property	=	new Property();
	$pointsEarned		=	0;
	
	
	$agentDetails 	=	$property	->	loadAgentDetailsByKey(trim($_GET['key']));
	$agentRecords	=	$property	->	loadAgentRecordsByUserKey($agentDetails["user_key"]);
	$pointsEarned	=	$property  ->  loadPointsByAgentKey(trim($_GET['key']));
	
	$properties		=	$property	->	loadPropertiesByAgentKey($agentDetails["user_key"]);
	
	//op($properties);exit;
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	
	$smarty -> assign("agentKey",$_GET['key']);
	$smarty -> assign("properties",$properties);
	$smarty -> assign("points",$pointsEarned);
	$smarty -> assign("recordDetails",$agentRecords);
	$smarty -> assign("agentDetails",$agentDetails);
	$smarty->display("agentProfile.tpl");

?>