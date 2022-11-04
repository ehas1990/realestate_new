<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	
	if(!isset($_GET['key'][11]) OR trim($_GET['key'])==""){
		
		header("Location:listAgents.php");
		exit;
	}
	
	$property		=	new Property();
	
	
	$details		= $property	-> loadPropertyDetailsByKey(trim($_GET['key']));
	$agentDetails	= $property	->	loadAgentDetailsByUserId($details[0]['userid']);
	
	$similar		= $property	-> loadSimilarProperties($details[0]['property_key'],$details[0]['property_district'],$details[0]['property_panchayat']);		
	
	
	$images		=	array();
	
	$propertyDetails	=	array();
	$counter			=	1;
	$index				= 0;
	$propertyImages		=	array();
 	//echo "<br> DETAILS <br>";
	
//	op($details);
	
	
	foreach($details as $d){
		
		
		$counter++;
		$images[$index]['image_key'] = $d['property_image'];
		$images[$index]['image_name'] = $d['image_name'];
		$index++;
	 	if(isset( $d['image'.$counter][0]) ){
			
			$images[$index]['image_key']	=	$d['image'.$counter];
			$images[$index]['image_name']	=	$d['image_name'.$counter];
			$index++;
		} 
		$counter++;
		if(isset( $d['image'.$counter][0]) ){
			
			$images[$index]['image_key']	=	$d['image'.$counter];
			$images[$index]['image_name']	=	$d['image_name'.$counter];
			$index++;
		} 
		$counter++;
		if(isset( $d['image'.$counter][0]) ){
			$images[$index]['image_key']	=	$d['image'.$counter];
			$images[$index]['image_name']	=	$d['image_name'.$counter];
			$index++;
		} 
		$d['images']	=	$images;
		$propertyDetails	= $d;
	}
	
	
	$propertyImages		=	$d['images'];
	//op($_SESSION);
	//op($propertyImages);
	
	//op($similar);
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	else
		$smarty->assign("user_logined", false);
	
	$smarty->assign("counter",2);
	$smarty->assign("similarProperties",$similar);
	$smarty->assign("agentDetails",$agentDetails);
	$smarty->assign("details",$details[0]);
	$smarty->assign("propertyImages",$propertyImages);
	$smarty->display("propertyDetails.tpl");
	
?>