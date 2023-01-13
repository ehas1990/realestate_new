<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	
	loginRedirect();
	
	$displayMessage		=	0;
	$property		=	new Property();
	$properties		= 	array();

	if(!isset($_GET['k'][11]) OR trim($_GET['k'])==""){
		
		header("Location:index.php");
		exit;
	}
	
	if(isset($_POST['act']) AND trim($_POST['act'])=="search"){
		
		
		
		try{
			
			if(!isset($_POST['property_for']) OR trim($_POST['property_for'])=="x")
				throw new Exception("Please select District"); 
			
			if(!isset($_POST['district']) OR trim($_POST['district'])=="")
				throw new Exception("Please Select District"); 
			
			if(!isset($_POST['panchayath']) OR trim($_POST['panchayath'])=="x")
				throw new Exception("Please Select Panchayath"); 
			
			

			$properties = $property	->	searchForHome(trim($_POST['property_for']),trim($_POST['district']),trim($_POST['panchayath']));
			
			
		}
			catch(Exception $e) {
			
				$displayMessage	=	1;
				$smarty	->	assign("message",$e->getMessage());
				$smarty	->	assign("color","red");
			}
			
	}else{
	
		$properties		=	$property	->	loadPropertiesByDistrictWise(trim($_GET['k']));
	}
	
	// op($properties);exit;
	
	if(is_array($properties))
		$totalProperties=	sizeof($properties);
	else
		$totalProperties=NULL;
	
	$districts			=	$property	->	loadAllDistricts();
	
	//op($districts);
	
	$smarty->assign("districts",$districts);
	$smarty->assign("totalProperties",$totalProperties);
	$smarty->assign("properties",$properties);
	$smarty	->	assign("displayMessage",$displayMessage);
	$smarty->display("listPropertiesByDistrict.tpl");

?>