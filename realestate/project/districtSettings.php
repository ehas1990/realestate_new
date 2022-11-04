<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	
	protectUser(10);
	
	$property	=	new Property();
	
	
	if(isset($_POST['act']) AND trim($_POST['act'])=="addDistrict"){
		
		try{
			
			if(!isset($_POST['district']) OR trim($_POST['district'])=="")
				throw new Exception("Please enter District Name"); 
			
			 
			
			
			
			$result = $property	->	addDistrict(trim($_POST['district']));
			
			if($result==true){
				
				header("Location:districtSettings.php");
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
	
	
	
	$smarty -> assign("districts",$districts);
	$smarty -> assign("panchayats",$panchayats);
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	
	$smarty->display("districtSettings.tpl");

?>