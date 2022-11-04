<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	
	protectUser(5);
	
	$property		=	new Property();
	
	$planLimit	=	$property	->	loadPlanLimitByUserKey($_SESSION["user_key"]);
	$post_number=   $property	->	loadNumberOfPostsByUserKey($_SESSION["user_key"]);
		

	$fileUploadStatus1	=	false;
	$fileUploadStatus2  =	false;
	$fileUploadStatus3  =	false;
	$fileUploadStatus4  =	false;
	
	$target_dir 		= "uploads/";
	$uploadSize			=	5000000;
	$dr1				=	0;
	
	if($post_number <  $planLimit) {
	
	if(isset($_POST['act']) AND trim($_POST['act'])=="addPost"){
		
	//	op($_POST);exit;
		
		try{
			
			
			if(!isset($_POST['propertyname']) OR trim($_POST['propertyname'])=="")
				throw new Exception("Please enter Property Title"); 
			
		/* 	if(!isset($_SESSION['district']) OR trim($_SESSION['district'])=="")
				throw new Exception("District Key Missing.. Please contact Admin"); 
			
			if(!isset($_SESSION['panchayat']) OR trim($_SESSION['panchayat'])=="")
				throw new Exception("Panchayat Key Missing.. Please contact Admin"); */
			
			if(!isset($_POST['propertyfor']) OR trim($_POST['propertyfor'])=="")
				throw new Exception("Please Select Post Type"); 
			
			if(!isset($_FILES['mainphoto']['name']) OR trim($_FILES['mainphoto']['name'])=="")
				throw new Exception("Please upload Main  Photo"); 
			
			if( ($_FILES['mainphoto']['type'] !="image/png" ) AND ( $_FILES['mainphoto']['type'] !="image/jpg" ) AND ( $_FILES['mainphoto']['type'] !="image/jpeg") )
				throw new Exception("Please upload PNG OR JPG or JPEG files"); 
			
			else{
				
				if ($_FILES["mainphoto"]["size"] > $uploadSize)
					throw new Exception ("Sorry - size of image is too Large . Please use small size image ");
				else
					$fileUploadStatus1 = true;
			}
			
			if(isset($_FILES['photo2']['name']) AND trim($_FILES['photo2']['name'])!=""){
				
				if( ($_FILES['photo2']['type'] !="image/png" ) AND ( $_FILES['photo2']['type'] !="image/jpg" ) AND ( $_FILES['photo2']['type'] !="image/jpeg") )
				throw new Exception("Please upload PNG OR JPG or JPEG files for the Second Image"); 
			
				if ($_FILES["photo2"]["size"] > $uploadSize)
					throw new Exception ("Sorry - size of the Second Image  is too Large . Please use small size image ");
				else
					$fileUploadStatus2 = true;
					
			}
			
			if(isset($_FILES['photo3']['name']) AND trim($_FILES['photo3']['name'])!=""){
				
				if( ($_FILES['photo3']['type'] !="image/png" ) AND ( $_FILES['photo3']['type'] !="image/jpg" ) AND ( $_FILES['photo3']['type'] !="image/jpeg") )
				throw new Exception("Please upload PNG OR JPG or JPEG files for the Third Image"); 
			
				if ($_FILES["photo3"]["size"] > $uploadSize)
					throw new Exception ("Sorry - size of the Third Image  is too Large . Please use small size image ");
				else
					$fileUploadStatus3 = true;
					
			}
			
			if(isset($_FILES['photo4']['name']) AND trim($_FILES['photo4']['name'])!=""){
				
				if( ($_FILES['photo4']['type'] !="image/png" ) AND ( $_FILES['photo4']['type'] !="image/jpg" ) AND ( $_FILES['photo4']['type'] !="image/jpeg") )
				throw new Exception("Please upload PNG OR JPG or JPEG files for the Third Image"); 
			
				if ($_FILES["photo4"]["size"] > $uploadSize)
					throw new Exception ("Sorry - size of the Fourth Image  is too Large . Please use small size image ");
				else
					$fileUploadStatus4 = true;
					
			}
			
			if(!isset($_POST['propertyprice']) OR trim($_POST['propertyprice'])=="")
				throw new Exception("Please enter Property Price"); 
			
			if(!isset($_POST['propertyarea']) OR trim($_POST['propertyarea'])=="")
				throw new Exception("Please enter Property Area in Square Feet"); 
			
			/* if(!isset($_POST['district']) OR trim($_POST['district'])=="x")
				throw new Exception("Please Select District"); 

			if(!isset($_POST['panchayat']) OR trim($_POST['panchayat'])=="x")
				throw new Exception("Please Select Panchayath"); */ 
			
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
			
			
			
			if($fileUploadStatus1 != true)
				throw new Exception("Sorry image is not reday to upload");  
			
			
			
			$result = $property	->	postProperty(trim($_POST['propertyname']),trim($_POST['propertyfor']),trim($_POST['propertyprice']),trim($_POST['propertyarea']),$_SESSION['district'],$_SESSION['panchayat'],trim($_POST['bedrooms']),trim($_POST['bathrooms']),trim($_POST['floor']),trim($_POST['parking']),trim($_POST['description']),$_POST['map'],'0');
		
			
			if($fileUploadStatus1 == true) {
				
					$imgKey1	=	generateUniqueKey();
					
					$dr1	=	$target_dir.$result['propertyKey'];
					mkdir($dr1);
					$dr2	=	$dr1."/".$imgKey1;
					mkdir($dr2);
					$target_file = $dr1."/".$imgKey1."/". basename($_FILES["mainphoto"]["name"]);
					if (move_uploaded_file($_FILES["mainphoto"]["tmp_name"], $target_file)) {
						
						echo "The file ". htmlspecialchars( basename( $_FILES["mainphoto"]["name"])). " has been uploaded.";
					 } else {
						echo "Sorry, there was an error uploading your file.";
					  }
				
				$result2 = $property	-> updateImageTable($imgKey1,$result['userId'],$result['propertyId'],$_FILES['mainphoto']['name'],$_FILES['mainphoto']['type'],$result['propertyKey'],'1','0');	
			}
			else
				throw new Exception("Sorry Main image is not reday to upload");
			
			
			if($fileUploadStatus2 == true) {
				
					$imgKey2	=	generateUniqueKey();
					$dr2	=	$dr1."/".$imgKey2;
					mkdir($dr2);
					$target_file = $dr1."/".$imgKey2."/". basename($_FILES["photo2"]["name"]);
					if (move_uploaded_file($_FILES["photo2"]["tmp_name"], $target_file)) {
						
						echo "The file ". htmlspecialchars( basename( $_FILES["photo2"]["name"])). " has been uploaded.";
					 } else {
						echo "Sorry, there was an error uploading your file.";
					  }
				
				$result2 = $property	-> updateImageTable2($imgKey2,$result['userId'],$result['propertyId'],$_FILES['photo2']['name'],$_FILES['photo2']['type'],$result['propertyKey'],'1','0');	
			}
			
			
			if($fileUploadStatus3 == true) {
				
					$imgKey3	=	generateUniqueKey();
					$dr2	=	$dr1."/".$imgKey3;
					mkdir($dr2);
					$target_file = $dr1."/".$imgKey3."/". basename($_FILES["photo3"]["name"]);
					if (move_uploaded_file($_FILES["photo3"]["tmp_name"], $target_file)) {
						
						echo "The file ". htmlspecialchars( basename( $_FILES["photo3"]["name"])). " has been uploaded.";
					 } else {
						echo "Sorry, there was an error uploading your file.";
					  }
				
				$result2 = $property	-> updateImageTable3($imgKey3,$result['userId'],$result['propertyId'],$_FILES['photo3']['name'],$_FILES['photo3']['type'],$result['propertyKey'],'1','0');	
			}
			
			
			
			if($fileUploadStatus4 == true) {
				
					$imgKey4	=	generateUniqueKey();
					$dr2	=	$dr1."/".$imgKey4;
					mkdir($dr2);
					$target_file = $dr1."/".$imgKey4."/". basename($_FILES["photo4"]["name"]);
					if (move_uploaded_file($_FILES["photo4"]["tmp_name"], $target_file)) {
						
						echo "The file ". htmlspecialchars( basename( $_FILES["photo4"]["name"])). " has been uploaded.";
					 } else {
						echo "Sorry, there was an error uploading your file.";
					  }
				
				$result2 = $property	-> updateImageTable4($imgKey4,$result['userId'],$result['propertyId'],$_FILES['photo4']['name'],$_FILES['photo4']['type'],$result['propertyKey'],'1','0');	
			}
			
			
			
			
			op($result);
			exit;
			
		}
			catch(Exception $e) {
				
				echo $e->getMessage();
				exit;
			}
			
		}
	}else{
		
		echo "You reached your post limit..";
	}
	
	$districts	=	$property	->	loadAllDistricts();
	$panchayats	=	$property	->	loadAllPanchayats();
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	
	$smarty->assign("planLimit", $planLimit);
	$smarty->assign("post_number", $post_number);
	
	$smarty->assign("districts",$districts);
	$smarty->assign("panchayats",$panchayats);
	$smarty->display("postproperty.tpl");

?>