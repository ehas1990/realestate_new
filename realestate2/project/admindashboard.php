<?php

	include_once "../core.php";
	include_once "../core.function.php";
	
	protectUser(10);
	
	
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	
	$smarty->display("admindashboard.tpl");

?>