<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Payments.class.php";
	
	protectUser(5);
	$displayMessage		=	0;
	
	$payments	=	new Payments();
	
	$rankList=	$payments   ->  loadPremiumProfileRankList($_SESSION['user_key'],$_SESSION['panchayat'],$_SESSION['district']);
	
	//op($rankList);exit;
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	
	$smarty	->	assign("rankList",$rankList);
	$smarty	->	assign("displayMessage",$displayMessage);
	
	$smarty->display("premiumProfileList.tpl");

?>