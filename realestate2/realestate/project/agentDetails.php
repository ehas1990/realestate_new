<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	
	protectUser(10);
	
	if(!isset($_GET['key']{11}) OR trim($_GET['key'])==""){
		
		header("Location:listAgents.php");
		exit;
	}
	
	$property	=	new Property();
	
	
	if(isset($_POST['act']) AND trim($_POST['act'])=="updateAgent"){
		
	
		
		try{
			
			if(!isset($_POST['key']) OR trim($_POST['key'])=="")
				throw new Exception("Unusual Attempt Found .. Contact Administrator"); 
			
			if(!isset($_POST['agentname']) OR trim($_POST['agentname'])=="")
				throw new Exception("Please enter Agent Name"); 
			
			if(!isset($_POST['username']) OR trim($_POST['username'])=="")
				throw new Exception("Please enter Email ID"); 
			
			if(!isset($_POST['password']) OR trim($_POST['password'])=="")
				throw new Exception("Please enter Password"); 
			
			if(!isset($_POST['repeatpassword']) OR trim($_POST['repeatpassword'])=="")
				throw new Exception("Please Reenter Password"); 
			
			if($_POST['password'] !=$_POST['repeatpassword'])
				throw new Exception("Password Missmatch");
			
			if(!isset($_POST['agentphone']) OR trim($_POST['agentphone'])=="")
				throw new Exception("Please enter Contact Number"); 
			
			if(!isset($_POST['district']) OR trim($_POST['district'])=="x")
				throw new Exception("Please Select District");
			
			if(!isset($_POST['panchayath']) OR trim($_POST['panchayath'])=="x")
				throw new Exception("Please Select Panchayat"); 
			
			$result = $property	->	updateAgent(trim($_POST['key']),trim($_POST['agentname']),trim($_POST['username']),trim($_POST['password']),trim($_POST['agentphone']),trim($_POST['district']),trim($_POST['panchayath']));
			
			if($result==true){
				
				header("Location:listAgents.php");
				exit;
			}
		}
			catch(Exception $e) {
			
				echo $e->getMessage();
				exit;
			}
			
		
			
		}
	
	
	
	$agentDetails 	=	$property	->	loadAgentDetailsByKey(trim($_GET['key']));
	$districts		=	$property	->	loadAllDistricts();
	
	//op($agentDetails);
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	
	
	$smarty -> assign("districts",$districts);
	
	$smarty -> assign("agentDetails",$agentDetails);
	$smarty->display("agentDetails.tpl");

?>