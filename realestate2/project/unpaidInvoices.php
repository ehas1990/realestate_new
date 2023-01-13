<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Payments.class.php";
	
	protectUser(10);
	
	$payment		=	new Payments();
	
	$invoices		=	$payment	->	loadInvoicesByStatus('0');
	
	//op($invoices); exit;
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	
	$smarty -> assign("invoices",$invoices);
	$smarty->display("unpaidInvoices.tpl");

?>