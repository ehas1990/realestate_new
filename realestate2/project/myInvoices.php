<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Payments.class.php";
	include_once "model/Property.class.php";
	
	protectUser(5);
	
	$payments	=	new Payments();
	$property	=	new Property();
	
	if(isset($_POST['act']) AND trim($_POST['act'])=="payment"){
	
		
		try{
			
			if(!isset($_POST['invoice_key']) OR trim($_POST['invoice_key'])=="")
				throw new Exception("Invoice Key Missing..."); 
			
			if(!isset($_POST['public_key']) OR trim($_POST['public_key'])=="")
				throw new Exception("Public Key Missing..."); 
			
			if(!isset($_POST['amount']) OR trim($_POST['amount'])=="")
				throw new Exception("Amount Missing..."); 
			
			if(!isset($_POST['description']) OR trim($_POST['description'])=="")
				throw new Exception("Description Missing..."); 
			
			$userDetails	=	$property	->	loadAgentDetailsByUserKey3($_SESSION['user_key']);
			
		//	op($userDetails);exit;
			
			$_SESSION["agent_name"] 	= $userDetails['agent_name'];
			$_SESSION["user_name"] 		= $userDetails['user_name'];
			$_SESSION["contact_number"] = $userDetails['contact_number'];
			$_SESSION["district"] 		= $userDetails['district'];
			$_SESSION["panchayat"] 		= $userDetails['panchayat'];
			
			$_SESSION["invoice_key"] 	= $_POST['invoice_key'];
			$_SESSION["public_key"] 	= $_POST['public_key'];
			$_SESSION["amount"] 		= $_POST['amount'];
			$_SESSION["description"] 	= $_POST['description'];
			
			header("Location:billing/index.php");
		}
			catch(Exception $e) {
			
				$displayMessage	=	1;
				$smarty	->	assign("message",$e->getMessage());
				$smarty	->	assign("color","red");
			}
			
	}
	
	
	$invoices	=	$payments	->	loadInVoicesByUserKey($_SESSION['user_key'],'0');
	
	//op($invoices);exit;
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	
	$smarty -> assign("invoices",$invoices);
	$smarty->display("myInvoices.tpl");

?>