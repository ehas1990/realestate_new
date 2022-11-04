<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	
	protectUser(10);
	
	$property	=	new Property();
	
	
	if(isset($_POST['act']) AND trim($_POST['act'])=="addPanchayath"){
		
		try{
			
			if(!isset($_POST['panchayathname']) OR trim($_POST['panchayathname'])=="")
				throw new Exception("Please enter Panchayath Name.. "); 
			
			if(!isset($_POST['district']) OR trim($_POST['district'])=="" OR trim($_POST['district'])=="x")
				throw new Exception("Please select District.."); 
			
					
			
			
			$result = $property	->	addPanchayath(trim($_POST['panchayathname']),trim($_POST['district']));
			
			if($result==true){
				
				header("Location:panchayathSettings.php");
				exit;
			}
		}
			catch(Exception $e) {
			
				echo $e->getMessage();
				exit;
			}
			
		}
	
	
	
	
	$districts		=	$property	->	loadAllDistricts();
	$panchayats		=	$property 	-> loadAllPanchayats();
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	
	$smarty -> assign("districts",$districts);
	$smarty -> assign("panchayats",$panchayats);
	
	$smarty->display("panchayathSettings.tpl");

?>