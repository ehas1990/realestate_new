<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Admin.class.php";
	
	protectUser(10);
	
	$admin		=	new Admin();
	
	$agents		=	$admin	->	loadAllAgents();
	
	// op($agents); exit;
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	$smarty -> assign("agents",$agents);
	$smarty->display("listAgents.tpl");

?>