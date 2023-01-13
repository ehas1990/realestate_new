<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	
	protectUser(10);
	$property	=	new Property();
	
	if(!isset($_GET['key'][11]) OR trim($_GET['key'])==""){
		
		header("Location:districtSettings.php");
		exit;
	}
	$property	=	new Property();
	$displayMessage		=	0;
	
	if(isset($_POST['act']) AND trim($_POST['act'])=="editDistrict"){
		
		try{
			
			if(!isset($_POST['district']) OR trim($_POST['district'])=="")
				throw new Exception("Please enter District Name"); 
			
		if (	$result = $property	->	updateDistrict(trim($_GET['key']),trim($_POST['district'])) ){
			
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
	
	
	
	
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	$result	=	$property	->	loadDistrictNameByKey(trim($_GET['key']));
	
	$smarty->assign("displayMessage",$displayMessage);
	$smarty->assign("district_name",$result['district_name']);
	$smarty->display("editDistrict.tpl");
	
?>