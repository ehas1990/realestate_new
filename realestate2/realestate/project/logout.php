<?php session_start();
	
	 unset($_SESSION['logined']);
	 unset($_SESSION['user_type']);
	 unset($_SESSION['name']);
	 unset($_SESSION['user_key']);
	 unset($_SESSION['district']);
	 unset($_SESSION['panchayat']);
	 
	 header("Location:index.php");
	 exit;
?>