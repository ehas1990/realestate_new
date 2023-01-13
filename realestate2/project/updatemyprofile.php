<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "model/Property.class.php";
	
	protectUser(5);
	
	$displayMessage		=	0;
	$message			= 	null;
	$color				=	null;
	$fileUploadStatus1	=	false;
	$fileUploadStatus2  =	false;
	
	$target_dir 		= "cards/";
	$uploadSize			=	5000000;
	$dr1				=	0;
	
	
	$property	=	new Property();
	
	
	if(isset($_POST['act']) AND trim($_POST['act'])=="updateMyProfile"){
		
	//op($_SESSION);
		
		try{
			
						
			if(!isset($_POST['agentname']) OR trim($_POST['agentname'])=="")
				throw new Exception("Please enter Agent Name"); 
			
			if(!isset($_POST['username']) OR trim($_POST['username'])=="")
				throw new Exception("Please enter Email ID"); 
			
			if(!isset($_POST['password']) OR trim($_POST['password'])=="")
				throw new Exception("Please enter Password"); 
			
			if(!isset($_POST['repeatpassword']) OR trim($_POST['repeatpassword'])=="")
				throw new Exception("Please Reenter Password"); 
			
			if($_POST['password'] !=$_POST['repeatpassword'])
				throw new Exception("Password Missmatch");
			
			if(!isset($_POST['agentphone']) OR trim($_POST['agentphone'])=="")
				throw new Exception("Please enter Contact Number"); 
			
			if(!isset($_POST['district']) OR trim($_POST['district'])=="x")
				throw new Exception("Please Select District");
			
			if(!isset($_POST['panchayath']) OR trim($_POST['panchayath'])=="x")
				throw new Exception("Please Select Panchayat"); 
			
			//-------------
			
				if(isset($_FILES['myphoto']['name']) AND trim($_FILES['myphoto']['name'])!="") {
								
					if( ($_FILES['myphoto']['type'] !="image/png" ) AND ( $_FILES['myphoto']['type'] !="image/jpg" ) AND ( $_FILES['myphoto']['type'] !="image/jpeg") )
						throw new Exception("Please upload PNG OR JPG or JPEG files"); 
					
					if ($_FILES["myphoto"]["size"] > $uploadSize)
							throw new Exception ("Sorry - size of your photo is too Large . Please use small size image ");
					else
							$fileUploadStatus1 = true;
					
				}
			//-------------
			if(isset($_FILES['aadhar']['name']) AND trim($_FILES['aadhar']['name'])!=""){
				
				if( ($_FILES['aadhar']['type'] !="image/png" ) AND ( $_FILES['aadhar']['type'] !="image/jpg" ) AND ( $_FILES['aadhar']['type'] !="image/jpeg") )
				throw new Exception("Please upload PNG OR JPG or JPEG files for the Second Image"); 
			
				if ($_FILES["aadhar"]["size"] > $uploadSize)
					throw new Exception ("Sorry - size of the Aadhar Image  is too Large . Please use small size image ");
				else
					$fileUploadStatus2 = true;
					
			}
			//-----------------
			
			
			
			$result = $property	->	updateMyAccount(trim($_SESSION['user_key']),trim($_POST['agentname']),trim($_POST['username']),trim($_POST['password']),trim($_POST['agentphone']),trim($_POST['district']),trim($_POST['panchayath']));
			
			$OldFileNames=  $property -> loadOldFileNameByUserKey($_SESSION['user_key']);
			
			//------------
			if($fileUploadStatus1 == true) {
				
					
					$recordKey	=	$property	->	loadAgentRecordKeyByUserKey($_SESSION['user_key']);
					$photoKey	=	$property	->	loadAgentPhotoKeyByUserKey($_SESSION['user_key']);
					$dr1		=	$target_dir.$_SESSION['user_key'];
					
					if(!is_dir($dr1)) {
					  mkdir($dr1);
					}
					$dr2	=	$dr1."/".$recordKey;
					if(!is_dir($dr2)) {
					  mkdir($dr2);
					}
					$dr3	=	$dr2."/".$photoKey;
					if(!is_dir($dr3)) {
					  mkdir($dr3);
					}
					if($OldFileNames["agent_photo_name"]){
						
						$oldPhotoTargetFile= $dr3."/".$OldFileNames["agent_photo_name"];
						//echo "<br> oldPhotoTargetFile :".$oldPhotoTargetFile;
						unlink($oldPhotoTargetFile);   
						
					}
					$target_file = $dr3."/". basename($_FILES["myphoto"]["name"]);
					
					move_uploaded_file($_FILES["myphoto"]["tmp_name"], $target_file); 
					
					
					
					$result1	=	$property ->	updateRecordTableWithImage($_SESSION['user_key'],$_FILES['myphoto']['name'],$_FILES['myphoto']['type']);
				}
			
			
			if($fileUploadStatus2 == true) {
				
					$recordKey	=	$property	->	loadAgentRecordKeyByUserKey($_SESSION['user_key']);
					$adharKey	=	$property	->	loadAgentAdharKeyByUserKey($_SESSION['user_key']);
											
					$dr1		=	$target_dir.$_SESSION['user_key'];
					if(!is_dir($dr1)) {
					  mkdir($dr1);
					}
					$dr2	=	$dr1."/".$recordKey;
					if(!is_dir($dr2)) {
					  mkdir($dr2);
					}
					$dr3	=	$dr2."/".$adharKey;
					if(!is_dir($dr3)) {
					  mkdir($dr3);
					}
					
					if($OldFileNames["agent_aadhar_name"]){
					
						$oldAdharTargetFile= $dr3."/".$OldFileNames["agent_aadhar_name"];
						unlink($oldAdharTargetFile); 
					
					}
					
					$target_file = $dr3."/". basename($_FILES["aadhar"]["name"]);
					
					move_uploaded_file($_FILES["aadhar"]["tmp_name"], $target_file);
					
					$result2	=	$property ->	updateRecordTableWithAadhar($_SESSION['user_key'],$_FILES['aadhar']['name'],$_FILES['aadhar']['type']);
			}
			
			//-------------
			$displayMessage	=	1;
			global $message;
			global $color;
			$message		=	$result["msg"];
			$color			=	$result["color"];
		}
			catch(Exception $e) {
			
				$displayMessage	=	1;
				global $message;
				global $color;
				
				$message		=	$e->getMessage();
				$color			=	"red";
			}
			
		
			
		}
	
	
	
	$agentDetails 	=	$property	->	loadAgentDetailsByUserKey4($_SESSION['user_key']);

	$districts		=	$property	->	loadAllDistricts();
	
	
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined", $_SESSION['logined']);
	
	
	$smarty -> assign("districts",$districts);
	$smarty	->	assign("displayMessage",$displayMessage);
	$smarty	->	assign("message",$message);
	$smarty	->	assign("color",$color);
	$smarty -> assign("agentDetails",$agentDetails);
	$smarty->display("updatemyprofile.tpl");

?>