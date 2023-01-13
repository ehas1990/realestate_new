<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	include_once "model/Admin.class.php";
	
	protectUser(10);
	
	$displayMessage		=	0;
	$message			= 	null;
	$color				=	null;
	$admin		=	new Admin();
	$property	=	new Property();
	
	if(isset($_POST['act']) AND trim($_POST['act'])=="addAgent"){
		
		
		
		
		try{
			
			if(!isset($_POST['agentname']) OR trim($_POST['agentname'])=="")
				throw new Exception("Please enter Agent Name"); 
			
			if(!isset($_POST['email']) OR trim($_POST['email'])=="")
				throw new Exception("Please enter Agent Email ID"); 
			
			if(!isset($_POST['password']) OR trim($_POST['password'])=="")
				throw new Exception("Please enter Password"); 
			if(!isset($_POST['repeatpassword']) OR trim($_POST['repeatpassword'])=="")
				throw new Exception("Please Repeat Password");
			
			if(trim($_POST['password'])!=trim($_POST['repeatpassword']))
				throw new Exception("Password Miss Match");
			
			if(!isset($_POST['agentphone']) OR trim($_POST['agentphone'])=="")
				throw new Exception("Please enter Phone Numbher");
			
			if(!isset($_POST['district']) OR trim($_POST['district'])=="x")
				throw new Exception("Please Select District");
			
			if(!isset($_POST['panchayath']) OR trim($_POST['panchayath'])=="x")
				throw new Exception("Please Select Panchayath");

			if(!isset($_POST['plan']) OR trim($_POST['plan'])=="x")
				throw new Exception("Please Select Plan");
			
			$result = $property	->	addAgent(trim($_POST['agentname']),trim($_POST['email']),trim($_POST['password']),trim($_POST['agentphone']),trim($_POST['district']),trim($_POST['panchayath']),$_POST['plan'],'5','1','1');
			
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
	$plans	=	$admin	->	 loadAllPlans();
	
	
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	$smarty	->	assign("plans",$plans);
	$smarty	->	assign("districts",$districts);
	$smarty	->	assign("displayMessage",$displayMessage);
	$smarty	->	assign("message",$message);
	$smarty	->	assign("color",$color);
	$smarty	->	display("addAgent.tpl");

?>