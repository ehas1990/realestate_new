<?php 

include_once "../core.php";
include_once "../core.function.php";
include_once "model/Admin.class.php";

	$admin		=	new Admin();
	
	if(isset($_POST['act']) AND trim($_POST['act'])=="pricing"){
		
		
		try{
			
				if(!isset($_POST['cmd']) OR trim($_POST['cmd'])=="")
					throw new Exception("Please select your Plan"); 
				
				$details = $admin	->	loadPlanPriceByKey($_POST['cmd']);
				
				if($details){
					$_SESSION["pKey"] = $_POST['cmd'];
					$_SESSION["pPrice"] = $details;
					
					header("Location:p/pay.php?checkout=manual");
				}else{
					
					header("Location:index.php");
					
				}
			
				
		}
			catch(Exception $e) {
				
				
			}
			
		}
	$plans	=	$admin	->	 loadAllPlans();
	
	//op($plans);exit;
	
	$smarty -> assign("plans",$plans);
	$smarty->display("plans.tpl");

?>