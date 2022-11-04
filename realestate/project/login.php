<?php 

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "../basemodel/Users.class.php";
	
	loginRedirect();
	
	
	$users		=	new Users();
	
	
	
	if(isset($_POST['act']) AND trim($_POST['act'])=="Login"){
		
		
		try{
			
			if(!isset($_POST['username']) OR trim($_POST['username'])=="")
				throw new Exception("Please enter User Name"); 
			
			if(!isset($_POST['password']) OR trim($_POST['password'])=="")
				throw new Exception("Please enter Password"); 
			

			$result = $users	->	loginUser(trim($_POST['username']),trim($_POST['password']));
			
			//op($result);exit;
			
			if($result['status']==1){
				
				
				$_SESSION['logined']	=	"true";
				$_SESSION['user_type']	=	$result['result']['user_type'];
				$_SESSION['name']		=	$result['result']['name'];
				$_SESSION['user_key']	=	$result['result']['user_key'];
				$_SESSION['district']	=	$result['result']['district_key'];
				$_SESSION['panchayat']	=	$result['result']['panchayat_key'];
				
				if($result['result']['user_type']==10)
					header("Location:admindashboard.php");
				else if($result['result']['user_type']==8)
					header("Location:agentDashboard.php");
				else if($result['result']['user_type']==5)
					header("Location:agentDashboard.php");
				exit;
			}
			else
			{
				echo $result['msg'];
				
				
			}
		}
			catch(Exception $e) {
				
				echo $e->getMessage();
				exit;
			}
			
		}
	
	//Register Controller
	
	if(isset($_POST['act']) AND trim($_POST['act'])=="SignUp"){
		
		try{
			
			if(!isset($_POST['name']) OR trim($_POST['name'])=="")
				throw new Exception("Please enter Your Name"); 
			
			if(!isset($_POST['username']) OR trim($_POST['username'])=="")
				throw new Exception("Please enter User Name"); 
			
			if(!isset($_POST['password']) OR trim($_POST['password'])=="")
				throw new Exception("Please enter Password"); 
			
			if(!isset($_POST['phone']) OR trim($_POST['phone'])=="")
				throw new Exception("Please enter Phone Numbher");

			$result = $users	->	registerUser(trim($_POST['name']),trim($_POST['username']),trim($_POST['password']),'5','0');
			
			op($result);
			exit;
		}
			catch(Exception $e) {
			
				echo $e->getMessage();
				exit;
			}
			
		}
	
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
	
	$smarty->display("login.tpl");

?>