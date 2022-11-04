<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	
	protectUser(10);
	
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

			
			$result = $property	->	addAgent(trim($_POST['agentname']),trim($_POST['email']),trim($_POST['password']),trim($_POST['agentphone']),trim($_POST['district']),trim($_POST['panchayath']),'5','1','1');
			
			op($result);
			exit;
		}
			catch(Exception $e) {
			
				echo $e->getMessage();
				exit;
			}
			
		}
	
	$districts	=	$property	->	loadAllDistricts();
	
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	
	$smarty->assign("districts",$districts);
	
	$smarty->display("addAgent.tpl");

?>