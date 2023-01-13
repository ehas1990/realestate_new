<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Payments.class.php";
	
	protectUser(5);
	$displayMessage		=	0;
	
	$payments	=	new Payments();
	
	$paymentHistory=	$payments   ->  loadAllPaymentsByUserKey($_SESSION['user_key']);
	
	//op($paymentHistory);exit;
	
	if(isset($_SESSION['name']))
		$smarty->assign("name", $_SESSION['name']);
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	
	$smarty	->	assign("paymentHistory",$paymentHistory);
	$smarty	->	assign("displayMessage",$displayMessage);
	$smarty->display("paymentHistory.tpl");

?>