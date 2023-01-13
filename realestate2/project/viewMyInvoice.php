<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Payments.class.php";
	
	protectUser(10);
	
	
	if(!isset($_GET['key'][11]) OR trim($_GET['key'])==""){
		
		header("Location:unpaidInvoices.php");
		exit;
	}
	
	$payment		=	new Payments();
	
	$invoiceDetails	=	$payment	->	loadInvoicesByKey(trim($_GET['key']));
	
	//op($invoiceDetails); exit;
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	
	$smarty -> assign("invoiceDetails",$invoiceDetails);
	$smarty->display("viewMyInvoice.tpl");

?>