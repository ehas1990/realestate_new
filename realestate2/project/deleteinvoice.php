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
	
	$result 	= $payment	->	markInvoicePaid2(trim($_GET['key']));
	header("Location:unpaidInvoices.php");

?>