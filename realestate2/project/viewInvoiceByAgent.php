<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Payments.class.php";

	
	if(!isset($_GET['k'][11]) OR trim($_GET['k'])==""){
		
		header("Location:unpaidInvoices.php");
		exit;
	}
	
	$payment		=	new Payments();
	
	$invoiceDetails	=	$payment	->	loadInvoicesByKey(trim($_GET['k']));
	
	//op($invoiceDetails); exit;
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	
	$smarty -> assign("invoiceDetails",$invoiceDetails);
	$smarty->display("viewInvoiceByAgent.tpl");

?>