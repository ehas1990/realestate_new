<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	include_once "model/Payments.class.php";
	
	protectUser(5);
	
	$displayMessage		=	0;
	$points		=	0;
	
	$property	=	new Property();
	$payments	=	new Payments();
	
	$agentDetails 	=	$property	->	loadAgentDetailsByUserKey3($_SESSION['user_key']);
	
	$agentRecords	=	$property	->	loadAgentRecordsByUserKey($_SESSION['user_key']);
	
	$points			=	$property  ->  loadPointsByUserKey($_SESSION['user_key']);
	
	$myBalance		=	$payments  -> loadBalanceAmountByUserKey($_SESSION['user_key']);
	
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	
	$smarty -> assign("myBalance",$myBalance);
	$smarty -> assign("points",$points);
	$smarty -> assign("userKey",$_SESSION['user_key']);
	$smarty -> assign("agentDetails",$agentDetails);
	$smarty -> assign("recordDetails",$agentRecords);
	$smarty->display("viewMyProfile.tpl");

?>