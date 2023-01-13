<?php 

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "../basemodel/Users.class.php";
	include_once "model/Admin.class.php";
	include_once "model/Property.class.php";
	
	loginRedirect();
	
	$displayMessage		=	0;
	
	$users		=	new Users();
	$admin		=	new Admin();
	$property	=	new Property();
	

	
	if(isset($_POST['act']) AND trim($_POST['act'])=="Login"){
		
		
		try{
			
			if(!isset($_POST['username']) OR trim($_POST['username'])=="")
				throw new Exception("Please enter Email ID"); 
			
			if(!isset($_POST['password']) OR trim($_POST['password'])=="")
				throw new Exception("Please enter Password"); 
			

			$result = $users	->	loginUser(trim($_POST['username']),trim($_POST['password']));
			
			
			
			if($result['status']==1){
				
				
				$_SESSION['logined']	=	"true";
				$_SESSION['user_type']	=	$result['result']['user_type'];
				$_SESSION['name']		=	$result['result']['name'];
				$_SESSION['user_key']	=	$result['result']['user_key'];
				$_SESSION['district']	=	$result['result']['district_key'];
				$_SESSION['panchayat']	=	$result['result']['panchayat_key'];
				
				if($result['result']['user_type']==10)
					header("Location:admindashboard.php");
				else if($result['result']['user_type']==9)
					header("Location:districtAgentDashboard.php");
				else if($result['result']['user_type']==8)
					header("Location:agentDashboard.php");
				else if($result['result']['user_type']==5)
					header("Location:agentDashboard.php");
				exit;
			}
			else
			{
				$displayMessage	=	1;
				$smarty	->	assign("message",$result['msg']);
				$smarty	->	assign("color",$result['color']);
				
			}
		}
			catch(Exception $e) {
				
				$displayMessage	=	1;
				$smarty	->	assign("message",$e->getMessage());
				$smarty	->	assign("color","red");
			}
			
		}
	
	//Register Controller
	
	if(isset($_POST['act']) AND trim($_POST['act'])=="SignUp"){
		
		//op($_POST);exit;
		
		try{
			
			if(!isset($_POST['name']) OR trim($_POST['name'])=="")
				throw new Exception("Please enter Your Name"); 
			
			if(!isset($_POST['username']) OR trim($_POST['username'])=="")
				throw new Exception("Please enter Email"); 
			
			if( !emailValidator($_POST['username']))
				throw new Exception("Please enter a valid Email");
			
			if(!isset($_POST['password']) OR trim($_POST['password'])=="")
				throw new Exception("Please enter Password"); 
			
			if(!isset($_POST['repassword']) OR trim($_POST['repassword'])=="")
				throw new Exception("Please Re enter Password"); 
			
			if(trim($_POST['repassword']) !=trim( $_POST['repassword']))
				throw new Exception("Password - Re password mismatch");
			
			if(!isset($_POST['phone']) OR trim($_POST['phone'])=="")
				throw new Exception("Please enter Phone Numbher");
			
			if( !phoneValidator($_POST['phone']))
				throw new Exception("Please enter a valid Phone Numbher");
			
			if(!isset($_POST['plan']) OR trim($_POST['plan'])=="")
				throw new Exception("Please Select Plan");

			if(!isset($_POST['district']) OR trim($_POST['district'])=="x")
				throw new Exception("Please Select District");
			
			if(!isset($_POST['panchayath']) OR trim($_POST['panchayath'])=="x")
				throw new Exception("Please Select Panchayath");

			if(trim($_POST['panchayath']=="y"))
				throw new Exception("There is no Panchayaths added under this District");

			$result = $users	->	registerPublicUser(trim($_POST['name']),trim($_POST['username']),trim($_POST['password']),trim($_POST['plan']),trim($_POST['phone']),trim($_POST['district']),trim($_POST['panchayath']),'5','0');
			
		
			
			$displayMessage	=	1;
			$smarty	->	assign("message",$result['msg']);
			$smarty	->	assign("color",$result['color']);
		}
			catch(Exception $e) {
			
				$displayMessage	=	1;
				$smarty	->	assign("message",$e->getMessage());
				$smarty	->	assign("color","red");
			}
			
		}
	
	$plans	=	$admin	->	 loadAllPlans();
	$districts		=	$property	->	loadAllDistricts();
	
	$panchayats		=	$property 	-> loadAllPanchayats();
	
	//op($districts);exit;
	
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined",$_SESSION['logined']);
	if(isset($_SESSION['user_type']))
		$smarty->assign("user_user_type",$_SESSION['user_type']);
	if(isset($_SESSION['name']))
		$smarty->assign("user_name",$_SESSION['name']);
	if(isset($_SESSION['user_key']))
		$smarty->assign("user_key",$_SESSION['user_key']);
	if(isset($_SESSION['district']))
		$smarty->assign("user_district",$_SESSION['district']);
	if(isset($_SESSION['panchayat']))
		$smarty->assign("user_panchayat",$_SESSION['panchayat']);
	if(isset($_SESSION['logined']))
		$smarty->assign("user_logined",$_SESSION['logined']);
	
	$smarty -> assign("districts",$districts);
	$smarty -> assign("panchayats",$panchayats);
	
	$smarty	->	assign("plans",$plans);
	$smarty	->	assign("displayMessage",$displayMessage);
	$smarty->display("login.tpl");

?>