<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Admin.class.php";
	
	protectUser(10);
	$displayMessage	=	0;
	
	$admin		=	new Admin();
	
	$agents		=	$admin	->	loadAllExecutives();

	//op($agents);exit;
	
	if(!$agents){
		
		$displayMessage	=	1;
		$smarty	->	assign("message","There is no Executive accounts created yet..");
		$smarty	->	assign("color","red");
	}
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	
	
	$smarty -> assign("agents",$agents);
	$smarty->display("listExecutives.tpl");

?>