<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	
	protectUser(5);
	
	$property	=	new Property();
	
	$planLimit	=	$property	->	loadPlanLimitByUserKey($_SESSION["user_key"]);
	
	$post_number=   $property	->	loadNumberOfPostsByUserKey($_SESSION["user_key"]);
	

	//EXIT;
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	
	$smarty->assign("planLimit", $planLimit);
	$smarty->assign("post_number", $post_number);
	$smarty->assign("user", $_SESSION['name']);
	$smarty->display("agentDashboard.tpl");

?>