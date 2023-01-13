<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	
	protectUser(10);
	$property	=	new Property();
	
	if(!isset($_GET['key'][11]) OR trim($_GET['key'])==""){
		
		header("Location:panchayathSettings.php");
		exit;
	}
	$property	=	new Property();
	$displayMessage		=	0;
	
	if(isset($_POST['act']) AND trim($_POST['act'])=="editPanchayat"){
		
		try{
			
			if(!isset($_POST['pkey']) OR trim($_POST['pkey'])=="")
				throw new Exception("Panchayat Key Missing... Please contact Admin..."); 
			
			if(!isset($_POST['panchayath']) OR trim($_POST['panchayath'])=="")
				throw new Exception("Please Enter Panchayat Name"); 
			
		if (	$result = $property	->	updatePanchayat(trim($_POST['pkey']),trim($_POST['panchayath'])) ){
			
			$displayMessage	=	1;
			$smarty	->	assign("message",$result['msg']);
			$smarty	->	assign("color",$result['color']);
			
			}
		}
			catch(Exception $e) {
			
				$displayMessage	=	1;
				$smarty	->	assign("message",$e->getMessage());
				$smarty	->	assign("color","red");
			}
			
		}
	
	
	
	$panchayath	=	$property	->	loadPanchayathNameAndDistrictByPKey(trim($_GET["key"]));
	
	
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	
	$smarty->assign("displayMessage",$displayMessage);
	
	$smarty->assign("panchayath",$panchayath);
	$smarty->display("editPanchayath.tpl");
	
?>