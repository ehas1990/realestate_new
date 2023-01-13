<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";

	
//	protectUser(5);
	
	$displayMessage		=	0;
	$points		=	0;
	
	$property	=	new Property();
	
	
	//$agentDetails 	=	$property	->	loadAgentDetailsByUserKey($_SESSION['user_key']);
	
	
	
	//op($agentDetails);exit;
	/* 
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	
	
	$smarty -> assign("userKey",$_SESSION['user_key']);
	$smarty -> assign("agentDetails",$agentDetails); */
	
	$smarty->display("done.tpl");

?>