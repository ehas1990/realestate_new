<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	
	protectUser(10);
	
	if(!isset($_GET['key']{11}) OR trim($_GET['key'])==""){
		
		header("Location:listAgents.php");
		exit;
	}
	
	$property	=	new Property();
	
		
	$agentDetails 	=	$property	->	loadAgentDetailsByKey(trim($_GET['key']));
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	
	
	$smarty -> assign("agentDetails",$agentDetails);
	$smarty->display("agentProfile.tpl");

?>