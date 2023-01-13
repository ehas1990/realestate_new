<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Admin.class.php";
	
	
	
	protectUser(8);
	
	
	$displayMessage	=	0;
	
	$admin		=	new Admin();
	
	$agents		=	$admin	->	loadNewAgentsByPanchayath($_SESSION["panchayat"]);
	
	//op($agents);exit;

	if(!$agents){
		
		$displayMessage	=	1;
		$smarty	->	assign("message","There is no agent accounts created yet..");
		$smarty	->	assign("color","red");
	}
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	
	$smarty	->	assign("displayMessage",$displayMessage);
	$smarty -> assign("agents",$agents);

	$smarty->display("agentsUnderPanchayath.tpl");

?>



