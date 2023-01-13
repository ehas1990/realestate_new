<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";

	
	
	
	$displayMessage		=	0;
	$points		=	0;
	
	$property	=	new Property();
	
	
	/* $agentDetails 	=	$property	->	loadAgentDetailsByUserKey($_SESSION['user_key']);
	
	
	
	//op($agentDetails);exit;
	*/
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	
	
	
	$smarty->display("pay.tpl");

?>