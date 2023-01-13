<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Admin.class.php";
	include_once "model/Payments.class.php";
	
	protectUser(10);
	
	
	if(!isset($_GET['key'][11]) OR trim($_GET['key'])==""){
		
		header("Location:unpaidInvoices.php");
		exit;
	}
	
	$admin		=	new Admin();
	$payment	=	new Payments();
	
	if(isset($_POST['act']) AND trim($_POST['act'])=="markUsComplete"){
		
		
		
		try{
			
			if(!isset($_POST['invoice_key']) OR trim($_POST['invoice_key'])=="")
				throw new Exception("Invoice Key Missing"); 
			
			
			
		if (	$result = $admin	->	markInvoicePaymentCompleteByAdmin(trim($_POST['invoice_key'])) ){
			
			$displayMessage	=	1;
			$smarty	->	assign("message",$result['msg']);
			$smarty	->	assign("color",$result['color']);
			
			if($result["color"]=="green"){
				
				
				header("Location:unpaidInvoices.php");
			}
			
			}
		}
			catch(Exception $e) {
			
				$displayMessage	=	1;
				$smarty	->	assign("message",$e->getMessage());
				$smarty	->	assign("color","red");
			}
			
		}
	
	
	
	$invoiceDetails	=	$payment	->	loadInvoicesByKey(trim($_GET['key']));

	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	$smarty -> assign("invoiceKey",trim($_GET['key']));
	$smarty -> assign("invoiceDetails",$invoiceDetails[0]);
	$smarty->display("viewInvoice.tpl");

?>