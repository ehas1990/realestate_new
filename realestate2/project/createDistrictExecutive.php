<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	protectUser(10);
	
	$displayMessage		=	0;
	$message			= 	null;
	$color				=	null;
	
	$property	=	new Property();
	
	if(isset($_POST['act']) AND trim($_POST['act'])=="addExecutive"){
		
		
		try{
			
			if(!isset($_POST['executivename']) OR trim($_POST['executivename'])=="")
				throw new Exception("Please enter Executive Name"); 
			
			if(!isset($_POST['executiveemail']) OR trim($_POST['executiveemail'])=="")
				throw new Exception("Please enter Executive Email ID"); 
			
			if(!isset($_POST['password']) OR trim($_POST['password'])=="")
				throw new Exception("Please enter Password"); 
			if(!isset($_POST['repeatpassword']) OR trim($_POST['repeatpassword'])=="")
				throw new Exception("Please Repeat Password");
			
			if(trim($_POST['password'])!=trim($_POST['repeatpassword']))
				throw new Exception("Password Miss Match");
			
			if(!isset($_POST['executivephone']) OR trim($_POST['executivephone'])=="")
				throw new Exception("Please enter Executive Phone Numbher");
			
			if(!isset($_POST['district']) OR trim($_POST['district'])=="x")
				throw new Exception("Please Select District");
			
						
			$result = $property	->	addDistrictExecutive(trim($_POST['executivename']),trim($_POST['executiveemail']),trim($_POST['password']),trim($_POST['executivephone']),trim($_POST['district']),'9','1','');
			
			$displayMessage	=	1;
			global $message;
			global $color;
			
			$message		=	$result["msg"];
			$color			=	$result["color"];
		}
			catch(Exception $e) {
			
				$displayMessage	=	1;
				$displayMessage	=	1;
				global $message;
				global $color;
				
				$message		=	$e->getMessage();
				$color			=	"red";
			}
			
		}
	
	$districts	=	$property	->	loadAllDistricts();
	
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	
	$smarty->assign("districts",$districts);
	$smarty	->	assign("displayMessage",$displayMessage);
	$smarty	->	assign("message",$message);
	$smarty	->	assign("color",$color);
	$smarty->display("createDistrictExecutive.tpl");

?>