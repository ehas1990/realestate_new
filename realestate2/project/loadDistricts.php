<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	
	$result	=	null;
	 if(!isset($_POST['district']) or trim($_POST['district'])=="" or trim($_POST['district'])=="x"){
		
		echo "Invalid Attempt";
		
	}
	
	
	
	$property	=	new Property();
	
	$result	=	$property	->	loadAllPanchayatsByDistrictKey($_POST['district']);
	
	if($result) {
		if ($result->num_rows > 0) {
			
			$districts = null;
			
			while($row = $result->fetch_assoc()){
				echo "<option value='".$row['panchayath_key']."'>".$row['panchayath_name']."</option>";				
			}
			
		}
	}else {
		echo "<option value='y'>Empty Panchayath under this District</option>";
	}	
	exit;
?>