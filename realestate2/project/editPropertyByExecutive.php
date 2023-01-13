<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	
	protectUser(8);
	//$points				=	0;
	$displayMessage		=	0;
	
	$color				=	null;
	$property		=	new Property();
	
	if(!isset($_GET['key'][11]) OR trim($_GET['key'])==""){
		
		header("Location:viewMyProperties.php");
		exit;
	}
	
	$message="";
	$planLimit	=	$property	->	loadPlanLimitByPropertyKey(trim($_GET['key']));
	$post_number=   $property	->	loadNumberOfPostsByPropertyKey(trim($_GET['key']));
	
	
	
	$fileUploadStatus1	=	false;
	$fileUploadStatus2  =	false;
	$fileUploadStatus3  =	false;
	$fileUploadStatus4  =	false;
	
	$target_dir 		= "uploads/";
	$uploadSize			=	5000000;
	$dr1				=	0;
	
	// To delete 
	//$imgKeys	 = $property	->	loadPropertyImageKeysWithoutSortingByPropertyKey(trim($_GET['key']));
	
	
	
	if($post_number <  $planLimit) {
	
	if(isset($_POST['act']) AND trim($_POST['act'])=="addPost"){
		
		try{
		//	op($_POST);
			
			if(!isset($_POST['clientname']) OR trim($_POST['clientname'])=="")
				throw new Exception("Please enter Client Name"); 
			
			if(!isset($_POST['clientnumber']) OR trim($_POST['clientnumber'])=="")
				throw new Exception("Please enter Client Number");
			
			
			if(!isset($_POST['propertyname']) OR trim($_POST['propertyname'])=="")
				throw new Exception("Please enter Property Title"); 
				if(!isset($_POST['propertyfor']) OR trim($_POST['propertyfor'])=="")
				throw new Exception("Please Select Post Type"); 
			
			
			// First Image
			if(isset($_FILES['mainphoto']['name']) AND trim($_FILES['mainphoto']['name'])!="") {
				
				if( ($_FILES['mainphoto']['type'] !="image/png" ) AND ( $_FILES['mainphoto']['type'] !="image/jpg" ) AND ( $_FILES['mainphoto']['type'] !="image/jpeg") )
					throw new Exception("Please upload PNG OR JPG or JPEG files"); 
				
				if ($_FILES["mainphoto"]["size"] > $uploadSize)
						throw new Exception ("Sorry - size of image is too Large . Please use small size image ");
				else
					$fileUploadStatus1 = true;
				
			}
			// First Image
			
			
			// Second Image
			if(isset($_FILES['photo2']['name']) AND trim($_FILES['photo2']['name'])!=""){
				
				if( ($_FILES['photo2']['type'] !="image/png" ) AND ( $_FILES['photo2']['type'] !="image/jpg" ) AND ( $_FILES['photo2']['type'] !="image/jpeg") )
					throw new Exception("Please upload PNG OR JPG or JPEG files for the Second Image"); 
			
				if ($_FILES["photo2"]["size"] > $uploadSize)
					throw new Exception ("Sorry - size of the Second Image  is too Large . Please use small size image ");
				else
					$fileUploadStatus2 = true;
					
			}
			// Second Image
			
			
			// Third Image
			if(isset($_FILES['photo3']['name']) AND trim($_FILES['photo3']['name'])!=""){
				
				if( ($_FILES['photo3']['type'] !="image/png" ) AND ( $_FILES['photo3']['type'] !="image/jpg" ) AND ( $_FILES['photo3']['type'] !="image/jpeg") )
				throw new Exception("Please upload PNG OR JPG or JPEG files for the Third Image"); 
			
				if ($_FILES["photo3"]["size"] > $uploadSize)
					throw new Exception ("Sorry - size of the Third Image  is too Large . Please use small size image ");
				else
					$fileUploadStatus3 = true;
					
			}
			// Third Image
			
			// Fourth Image
			if(isset($_FILES['photo4']['name']) AND trim($_FILES['photo4']['name'])!=""){
				
				if( ($_FILES['photo4']['type'] !="image/png" ) AND ( $_FILES['photo4']['type'] !="image/jpg" ) AND ( $_FILES['photo4']['type'] !="image/jpeg") )
				throw new Exception("Please upload PNG OR JPG or JPEG files for the Third Image"); 
			
				if ($_FILES["photo4"]["size"] > $uploadSize)
					throw new Exception ("Sorry - size of the Fourth Image  is too Large . Please use small size image ");
				else
					$fileUploadStatus4 = true;
					
			}
			// Fourth Image
			
			if(!isset($_POST['propertyprice']) OR trim($_POST['propertyprice'])=="")
				throw new Exception("Please enter Property Price"); 
			
			if(!isset($_POST['propertyarea']) OR trim($_POST['propertyarea'])=="")
				throw new Exception("Please enter Property Area in Square Feet"); 
			
			if(!isset($_POST['bedrooms']) OR trim($_POST['bedrooms'])=="x")
				throw new Exception("Please Select Number of Bedrooms"); 
			
			if(!isset($_POST['bathrooms']) OR trim($_POST['bathrooms'])=="x")
				throw new Exception("Please Select Number of Bathrooms"); 
			
			if(!isset($_POST['floor']) OR trim($_POST['floor'])=="x")
				throw new Exception("Please Select Number of Floors"); 
			
			if(!isset($_POST['parking']) OR trim($_POST['parking'])=="x")
				throw new Exception("Please Select Number of Parking"); 
			
			if(!isset($_POST['description']) OR trim($_POST['description'])=="")
				throw new Exception("Please enter Description"); 
			
				
			$result		 = $property	->	updateProperty(trim($_POST['property_key']),trim($_POST['clientname']),trim($_POST['clientnumber']),trim($_POST['propertyname']),trim($_POST['propertyfor']),trim($_POST['propertyprice']),trim($_POST['propertyarea']),trim($_POST['bedrooms']),trim($_POST['bathrooms']),trim($_POST['floor']),trim($_POST['parking']),trim($_POST['description']),$_POST['map'],'0');
			//echo "<br> RESULT";
			//op($result);
			$imageKeys	 = $property	->	loadPropertyImageKeysWithoutSortingByPropertyKey($result['propertyKey']);
			//echo "<br> IMAGE KEYS";
		//	op($imageKeys);
			
			if( $fileUploadStatus1 == true) {
				if ( isset( $imageKeys[0]["img_key"])) {
					
					global $imageKeys;
						
						$dr1	=	$target_dir.$_POST['property_key'];
						
						if(!is_dir($dr1)) {
						 
						  mkdir($dr1);
						}
						$dr2	=	$dr1."/".$imageKeys[0]["img_key"];
						
						if(!is_dir($dr2)) {
						 
						  mkdir($dr2);
						}
						
						if($imageKeys[0]["img_name"]){
							
							$oldPhotoTargetFile= $dr2."/".$imageKeys[0]["img_name"];
							//echo "<br> Going to Unlink 1 image :".$oldPhotoTargetFile;
							unlink($oldPhotoTargetFile);   
							
						}
						$target_file = $dr2."/". basename($_FILES["mainphoto"]["name"]);
						move_uploaded_file($_FILES["mainphoto"]["tmp_name"], $target_file); 
						
					
						$result1 = $property	-> updateEditImageTable($result['propertyKey'],$imageKeys[0]['img_key'],$_FILES['mainphoto']['name'],$_FILES['mainphoto']['type'],'1');	
				}else{
					
						$dr1	=	$target_dir.$_POST['property_key'];
						if(!is_dir($dr1)) {
						 
						  mkdir($dr1);
						}
						$imgKey1	=	generateUniqueKey();
						$dr2	=	$dr1."/".$imgKey1;
						if(!is_dir($dr2)) {
						 
						  mkdir($dr2);
						}
						$target_file = $dr2."/". basename($_FILES["mainphoto"]["name"]);
						move_uploaded_file($_FILES["mainphoto"]["tmp_name"], $target_file);
						
						$result1 = $property	-> updateImageTableAdmin($imgKey1,$result['userId'],$result['propertyId'],$_FILES['mainphoto']['name'],$_FILES['mainphoto']['type'],$_POST['property_key'],'1','1','1');	
			
						
				}
			}
			
			
			
			if( $fileUploadStatus2 == true) {
				
				if ( isset( $imageKeys[1]["img_key"])) {
					
					global $imageKeys;
					
						$dr1	=	$target_dir.$_POST['property_key'];
						if(!is_dir($dr1)) {
						 
						  mkdir($dr1);
						}
						$dr2	=	$dr1."/".$imageKeys[1]["img_key"];
						
						if(!is_dir($dr2)) {
						 
						  mkdir($dr2);
						}
						
						if($imageKeys[1]["img_name"]){
							
							$oldPhotoTargetFile= $dr2."/".$imageKeys[1]["img_name"];
							//echo "<br> Going to Unlink 2 image :".$oldPhotoTargetFile;
							unlink($oldPhotoTargetFile);   
							
						}
						$target_file = $dr2."/". basename($_FILES["photo2"]["name"]);
						move_uploaded_file($_FILES["photo2"]["tmp_name"], $target_file);
					
					
					$result2 = $property	-> updateEditImageTable($result['propertyKey'],$imageKeys[1]['img_key'],$_FILES['photo2']['name'],$_FILES['photo2']['type'],'2');	
					
					}else{
						echo "<br> Inforest";
						$dr1	=	$target_dir.$_POST['property_key'];
						if(!is_dir($dr1)) {
						 
						  mkdir($dr1);
						}
						$imgKey2	=	generateUniqueKey();
						$dr2	=	$dr1."/".$imgKey2;
						if(!is_dir($dr2)) {
						 
						  mkdir($dr2);
						}
						$target_file = $dr2."/". basename($_FILES["photo2"]["name"]);
						move_uploaded_file($_FILES["photo2"]["tmp_name"], $target_file);
						
						$result1 = $property	-> updateImageTableAdmin($imgKey2,$result['userId'],$result['propertyId'],$_FILES['photo2']['name'],$_FILES['photo2']['type'],$_POST['property_key'],'1','2','0');	
			
						
				}
			}
			
			
			if( $fileUploadStatus3 == true) {
				
				if ( isset( $imageKeys[2]["img_key"])) {
					
					global $imageKeys;
				
					$dr1	=	$target_dir.$_POST['property_key'];
					if(!is_dir($dr1)) {
					 
					  mkdir($dr1);
					}
					$dr2	=	$dr1."/".$imageKeys[2]["img_key"];
					
					if(!is_dir($dr2)) {
					 
					  mkdir($dr2);
					}
					
					if($imageKeys[2]["img_name"]){
						
						$oldPhotoTargetFile= $dr2."/".$imageKeys[2]["img_name"];
						//echo "<br> Going to Unlink 3 image :".$oldPhotoTargetFile;
						unlink($oldPhotoTargetFile);   
						
					}
					$target_file = $dr2."/". basename($_FILES["photo3"]["name"]);
					move_uploaded_file($_FILES["photo3"]["tmp_name"], $target_file);
				
					$result3 = $property	-> updateEditImageTable($result['propertyKey'],$imageKeys[2]['img_key'],$_FILES['photo3']['name'],$_FILES['photo3']['type'],'3');	
				}else{
					
						$dr1	=	$target_dir.$_POST['property_key'];
						if(!is_dir($dr1)) {
						 
						  mkdir($dr1);
						}
						$imgKey3	=	generateUniqueKey();
						$dr2	=	$dr1."/".$imgKey3;
						if(!is_dir($dr2)) {
						 
						  mkdir($dr2);
						}
						$target_file = $dr2."/". basename($_FILES["photo3"]["name"]);
						move_uploaded_file($_FILES["photo3"]["tmp_name"], $target_file);
						
						$result1 = $property	-> updateImageTableAdmin($imgKey3,$result['userId'],$result['propertyId'],$_FILES['photo3']['name'],$_FILES['photo3']['type'],$_POST['property_key'],'1','3','0');	
			
						
				}
			
			}
			
			
			
			if( $fileUploadStatus4 == true) {
				
				if ( isset( $imageKeys[3]["img_key"])) {
						global $imageKeys;
					
						$dr1	=	$target_dir.$_POST['property_key'];
						if(!is_dir($dr1)) {
						 
						  mkdir($dr1);
						}
						$dr2	=	$dr1."/".$imageKeys[3]["img_key"];
						
						if(!is_dir($dr2)) {
						 
						  mkdir($dr2);
						}
						
						if($imageKeys[3]["img_name"]){
							
							$oldPhotoTargetFile= $dr2."/".$imageKeys[3]["img_name"];
							//echo "<br> Going to Unlink 4 image :".$oldPhotoTargetFile;
							unlink($oldPhotoTargetFile);   
							
						}
						$target_file = $dr2."/". basename($_FILES["photo4"]["name"]);
						move_uploaded_file($_FILES["photo4"]["tmp_name"], $target_file);
					
					$result4 = $property	-> updateEditImageTable($result['propertyKey'],$imageKeys[3]['img_key'],$_FILES['photo4']['name'],$_FILES['photo4']['type'],'4');	
				
				}else{
					
						$dr1	=	$target_dir.$_POST['property_key'];
						if(!is_dir($dr1)) {
						 
						  mkdir($dr1);
						}
						$imgKey4	=	generateUniqueKey();
						$dr2	=	$dr1."/".$imgKey4;
						if(!is_dir($dr2)) {
						 
						  mkdir($dr2);
						}
						$target_file = $dr2."/". basename($_FILES["photo4"]["name"]);
						move_uploaded_file($_FILES["photo4"]["tmp_name"], $target_file);
						
						$result1 = $property	-> updateImageTableAdmin($imgKey4,$result['userId'],$result['propertyId'],$_FILES['photo4']['name'],$_FILES['photo4']['type'],$_POST['property_key'],'1','4','4');	
			
						
				}
			}
			
			
			//$points 		=	$property -> insertPoint($result['userId'],$points["postProperty"],"New Property Listed");
		
			$displayMessage	=	1;
						
			$message		=	"Property Posted Successfully..You got ".$points. " Points . Congrass ";;
			$color			=	"green";
			
			
			
		}
			catch(Exception $e) {
				
				$displayMessage	=	1;
								
				$message		=	$e->getMessage();
				$color			=	"red";
			}
			
		}
	}else{
		
		$displayMessage	=	1;
		$message		=	"You reached your post limit..";
		$color			=	"red";
	}
	
	
	
	$districts	=	$property	->	loadAllDistricts();
	$panchayats	=	$property	->	loadAllPanchayats();
	
	$details		= $property	-> loadPropertyDetailsByKey(trim($_GET['key']));
		
	//op($details);exit;
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	if(isset($_SESSION['name']))
		$smarty->assign("name", $_SESSION['name']);
	
	
	$smarty->assign("planLimit", $planLimit);
	$smarty->assign("post_number", $post_number);
	
	$smarty->assign("districts",$districts);
	$smarty->assign("panchayats",$panchayats);
	
	$smarty->assign("points",$points);
	
	$smarty	->	assign("displayMessage",$displayMessage);
	$smarty	->	assign("message",$message);
	$smarty	->	assign("color",$color);
	$smarty	->	assign("details",$details[0]);
	$smarty->display("editPropertyByExecutive.tpl");

?>