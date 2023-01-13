<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	
	protectUser(10);
	
	$displayMessage		=	0;
	$message			= 	null;
	$color				=	null;
	
	$property	=	new Property();
	
	
	if(isset($_POST['act']) AND trim($_POST['act'])=="addPanchayath"){
		
		try{
			
			if(!isset($_POST['panchayathname']) OR trim($_POST['panchayathname'])=="")
				throw new Exception("Please enter Panchayath Name.. "); 
			
			if(!isset($_POST['district']) OR trim($_POST['district'])=="" OR trim($_POST['district'])=="x")
				throw new Exception("Please select District.."); 
			
					
			
			
			$result = $property	->	addPanchayath(trim($_POST['panchayathname']),trim($_POST['district']));
			
			$displayMessage	=	1;
			$message		=	$result["msg"];
			$color			=	$result["color"];
			
			
		}
			catch(Exception $e) {
			
				$displayMessage	=	1;
				$message		=	$e->getMessage();
				$color			=	"red";
			}
			
		}
	
	
	
	
	$districts		=	$property	->	loadAllDistricts();
	$panchayats		=	$property 	-> loadAllPanchayats();

	$districtPanchayaths	=	array();
	if($panchayats){
	foreach($panchayats as $p){
		
		foreach($districts as $d){
		
			if($p['district_id']==$d['district_id']){
				
				$p['district']	= $d['district_name'];
				
			}
				
		
		}
		$districtPanchayaths[]=$p;
	}
	}

	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	
	$smarty -> assign("districts",$districts);
	$smarty -> assign("panchayats",$panchayats);
	$smarty	->	assign("displayMessage",$displayMessage);
	$smarty	->	assign("districtPanchayaths",$districtPanchayaths);
	$smarty	->	assign("message",$message);
	$smarty	->	assign("color",$color);
	$smarty->display("panchayathSettings.tpl");

?>