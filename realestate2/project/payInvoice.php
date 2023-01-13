<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Payments.class.php";
	
	protectUser(10);
	
	$paymnent	=	new Payments();
	
	if(!isset($_GET['key'][11]) OR trim($_GET['key'])==""){
		
		header("Location:unpaidInvoices.php");
		exit;
	}
		
	$paymnent	=	new Payments();
	
	$result		=	$paymnent	->	markUsPaid(trim($_GET['key']),'1');
	header("Location:unpaidInvoices.php");
	exit;
	
?>