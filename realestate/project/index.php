<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	
	loginRedirect();
	
	$property		=	new Property();
	$properties		= 	array();
	
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
			
				echo $e->getMessage();
				exit;
			}
			
	}else{
	
		$properties		=	$property	->	loadPropertiesByStatus('1');
	}
	
	
	if(is_array($properties))
		$totalProperties=	sizeof($properties);
	else
		$totalProperties=NULL;
	
	$districts	=	$property	->	loadAllDistricts();
	
	$smarty->assign("districts",$districts);
	$smarty->assign("totalProperties",$totalProperties);
	$smarty->assign("properties",$properties);
	$smarty->display("index.tpl");

?>