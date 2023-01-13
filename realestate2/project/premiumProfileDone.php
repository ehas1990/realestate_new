<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Payments.class.php";
	
	/* 
	
	$displayMessage ="";
	
		try{
			
			if(!isset($_SESSION["logined"]) OR $_SESSION["logined"]!=true)
				throw new Exception("Not Logined");
			
			if(!isset($_SESSION["user_key"][11]) OR trim($_SESSION["logined"])=="")
				throw new Exception("User Key Missing");
			
			if(!isset($_SESSION["user_type"]) OR trim($_SESSION["user_type"])!=5)
				throw new Exception ("Usertype Missing");
	
		}catch(Exception $e) {
				
				$displayMessage	=	1;
				$smarty	->	assign("message",$e->getMessage());
				$smarty	->	assign("color","red");
		}
		
	$payments	=	new Payments();		
	
	if( $result	=	$payments	-> addProfilePayment($_SESSION["user_key"],2)){
		
		$displayMessage	=	1;
		$smarty	->	assign("message","Profile Boosting Payment Received");
		$smarty	->	assign("color",$result['color']);
	
	}

	
	if(isset($_SESSION['name']))
		$smarty->assign("name", $_SESSION['name']);
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']); */
		
	$smarty->display("premiumProfileDone.tpl");
	
?>