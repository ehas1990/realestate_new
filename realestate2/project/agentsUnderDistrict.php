<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Admin.class.php";
	
	
	if(!isset($_GET['dKey'][11]) OR trim($_GET['dKey'])==""){
		
		header("Location:districtAgentDashboard.php");
		exit;
	}
	protectUser(9);
	
	
	$displayMessage	=	0;
	
	$admin		=	new Admin();
	
	$agents		=	$admin	->	loadNewAgentsByDistrict($_GET["dKey"]);
	
	
	if(!$agents){
		
		$displayMessage	=	1;
		$smarty	->	assign("message","There is no agent accounts created yet..");
		$smarty	->	assign("color","red");
	}
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	
	$smarty	->	assign("displayMessage",$displayMessage);
	$smarty -> assign("agents",$agents);

	$smarty->display("agentsUnderDistrict.tpl");

?>



