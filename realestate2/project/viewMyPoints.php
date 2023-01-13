<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	
	protectUser(5);
	
	$displayMessage		=	0;
	$points		=	0;
	
	$property	=	new Property();
	
	$points			=	$property  ->  loadPointsByUserKey($_SESSION['user_key']);	
	$pointHistory			=	$property  ->  loadPointHistoryByUserKey($_SESSION['user_key']);
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	
	$smarty -> assign("pointHistory",$pointHistory);
	$smarty -> assign("points",$points);
	$smarty -> assign("userKey",$_SESSION['user_key']);
	
	$smarty->display("viewMyPoints.tpl");

?>