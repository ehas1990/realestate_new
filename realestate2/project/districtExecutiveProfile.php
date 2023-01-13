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
	
	
	
	$agentDetails 	=	$property	->	loadDistrictAgentDetailsByKey(trim($_GET['key']));
	//op($agentDetails);
	$agentRecords	=	$property	->	loadAgentRecordsByUserKey($agentDetails["user_key"]);
	//op($agentRecords);
	
		
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	if($agentDetails)
		$smarty -> assign("agentDetails",$agentDetails);
	if($agentDetails)
		$smarty -> assign("agentRecords",$agentRecords);
	$smarty->display("districtExecutiveProfile.tpl");

?>