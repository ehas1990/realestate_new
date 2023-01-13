<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	include_once "model/Payments.class.php";
	
	protectUser(5);
	
	if(!isset($_GET['key'][11]) OR trim($_GET['key'])==""){
		
		header("Location:listAgents.php");
		exit;
	}
	
	$property	=	new Property();
	$payments	=	new Payments();
	$points		=	0;
	
	
	$agentDetails 	=	$property	->	loadAgentDetailsByKey(trim($_GET['key']));
	$agentRecords	=	$property	->	loadAgentRecordsByUserKey($agentDetails["user_key"]);
	
	
	
	$points			=	$property  ->  loadPointsByUserKey($agentRecords["userKey"]);
	$premiumProfileRank	=	$payments  -> loadPremiumProfileRankByUserKeyAlone($_GET['key']);
	
	
	//op($premiumProfileRank);exit;
	
	$smarty->assign("topper", $premiumProfileRank["topper"]);
	$smarty->assign("position", $premiumProfileRank["position"]);
	$smarty->assign("higest", $premiumProfileRank["higest"]);
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	$smarty -> assign("points",$points);
	$smarty -> assign("recordDetails",$agentRecords);
	$smarty -> assign("agentDetails",$agentDetails);
	$smarty->display("profile.tpl");

?>