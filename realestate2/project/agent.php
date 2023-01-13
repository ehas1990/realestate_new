<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	
	
	
	if(!isset($_GET['key'][11]) OR trim($_GET['key'])==""){
		
		header("Location:listAgents.php");
		exit;
	} 
	
	$property	=	new Property();
	$points		=	0;
	
	
	$agentDetails 	=	$property	->	loadAgentDetailsByKey(trim($_GET['key']));
	$agentRecords	=	$property	->	loadAgentRecordsByUserKey($agentDetails["user_key"]);
	$points			=	$property  ->  loadPointsByUserKey($agentRecords["userKey"]);

	$properties		=	$property	->	loadPropertiesByUserKey(trim($_GET['key']));
	
	//op($properties);exit;
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	$smarty -> assign("points",$points);
	$smarty -> assign("recordDetails",$agentRecords);
	$smarty -> assign("agentDetails",$agentDetails);
	$smarty->display("agent.tpl");

?>