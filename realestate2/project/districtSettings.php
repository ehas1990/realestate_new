<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	
	protectUser(10);
	
	$displayMessage		=	0;
	$message			= 	null;
	$color				=	null;
	
	$property	=	new Property();
	
	
	if(isset($_POST['act']) AND trim($_POST['act'])=="addDistrict"){
		
		try{
			
			if(!isset($_POST['district']) OR trim($_POST['district'])=="")
				throw new Exception("Please enter District Name"); 
			
			 
			
			
			
			$result = $property	->	addDistrict(trim($_POST['district']));
			
			$displayMessage	=	1;
			$message		=	$result["msg"];
			$color			=	$result["color"];
			
		}
			catch(Exception $e) {
			
				$displayMessage	=	1;
				global $message;
				global $color;
				
				$message		=	$e->getMessage();
				$color			=	"red";
			}
			
		}
	
	
	
	
	$districts		=	$property	->	loadAllDistricts();
	
	
	//op($districts);
	
	$smarty -> assign("districts",$districts);
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	
	$smarty	->	assign("displayMessage",$displayMessage);
	$smarty	->	assign("message",$message);
	$smarty	->	assign("color",$color);
	
	$smarty->display("districtSettings.tpl");

?>