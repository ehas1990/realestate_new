<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	include_once "model/Payments.class.php";
	
	protectUser(5);
	
	
	$property	=	new Property();
	$payments	=	new Payments();

	$totalBalance 		= 	$payments  -> loadBalanceAmountByUserKey($_SESSION['user_key']);
	$premiumProfileRank	=	$payments  -> loadPremiumProfileRankByUserKey($_SESSION['user_key'],$_SESSION['panchayat'],$_SESSION['district']);
	
	//op($premiumProfileRank);exit;
	
	$planLimit	=	$property	->	loadPlanLimitByUserKey($_SESSION["user_key"]);
	$post_number=   $property	->	loadNumberOfPostsByUserKey($_SESSION["user_key"]);
	$points		=	$property	->	loadPointsByUserKey($_SESSION["user_key"]);
	$place		=	$property	->	loadPlace($_SESSION["district"],$_SESSION["panchayat"]);
	
	$isInvoice	=	$payments	->	isInvoiceByUserKey($_SESSION['user_key']);
	
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	if(isset($_SESSION['user_key']))
		$smarty->assign("user_Key", $_SESSION['user_key']);
	
	if(isset($_SESSION['name']))
		$smarty->assign("name", $_SESSION['name']);
	
	if(isset($_SESSION['district']))
		$smarty->assign("district", $place['district']);
	
	if(isset($_SESSION['panchayat']))
		$smarty->assign("panchayat", $place['panchayath']);
	
	$smarty->assign("topper", $premiumProfileRank["topper"]);
	$smarty->assign("position", $premiumProfileRank["position"]);
	$smarty->assign("higest", $premiumProfileRank["higest"]);
	$smarty->assign("expire", $premiumProfileRank["topper"]["payment_to"]);
	$smarty->assign("isInvoice",$isInvoice);
	$smarty->assign("totalBalance", $totalBalance);
	$smarty->assign("points", $points);
	$smarty->assign("planLimit", $planLimit);
	$smarty->assign("post_number", $post_number);
	$smarty->assign("user", $_SESSION['name']);
	$smarty->display("agentDashboard.tpl");

?>