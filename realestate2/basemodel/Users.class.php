<?php

	class Users{
	
		public function __construct(){
			
			
			global $sqlUserName;
			global $sqlPassword;
			global $sqlHost;
			global $sqlDatabase;
			
			$this -> sqlUserName =& $sqlUserName;
			$this -> passWord =& $sqlPassword;
			$this -> sqlHost	 =& $sqlHost;
			$this -> sqlDatabase =& $sqlDatabase;
		}
		
		function checkDuplicate($tableName,$fieldName,$value){
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			if ($conn->connect_error) {
				
			  die("Connection failed: " . $conn->connect_error);
			  
			}
			else{
				
				$sql	=	"SELECT id FROM ".$tableName." WHERE ".$fieldName."='".$value."' LIMIT 1";
				$result = 	$conn->query($sql);
				if ($result->num_rows > 0)
					return true;
				else
					return false;
			}
			
		}
				
		function registerPublicUser($name,$userName,$passWord,$plan,$contact_number,$district,$panchayath,$userType='2',$status='0'){
			
			$result	=	array();
			
			$userNameDuplicator = $this -> checkDuplicate("users","user_name",$userName);
			$userNameDuplicator2 = $this -> checkDuplicate("temp_users","temp_user_name",$userName);

			$mobileDuplicator 	= $this -> checkDuplicate("agents","contact_number",$contact_number);
			$mobileDuplicator2 	= $this -> checkDuplicate("temp_users","contact_number",$contact_number);
			
			if($userNameDuplicator){
				
				$result['color']	=	"red"; 
				$result['msg']		=	"Email Already Exists..";
				return $result;
			}
			if($userNameDuplicator2){
				
				$result['color']	=	"red"; 
				$result['msg']		=	"Email Already Exists..";
				return $result;
			}
			if($mobileDuplicator){
				$result['color']	=	"red"; 
				$result['status']	=	"false"; 
				$result['msg']		=	"Mobile Number Already Exists..";
				return $result;
		
			}
			if($mobileDuplicator2){
				$result['color']	=	"red"; 
				$result['status']	=	"false"; 
				$result['msg']		=	"Mobile Number Already Exists..";
				return $result;
		
			}
			
			
				$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
				
				if ($conn->connect_error) {
				  die("Connection failed: " . $conn->connect_error);
				}
				else{
					
					$userKey	=	generateUniqueKey();
					$planId		=	$this	->	loadKeyByValue("plans","id","plan_key",$plan);
					
					$sql = "INSERT INTO temp_users (temp_user_key ,temp_user_name,password ,temp_name,plan_id,contact_number,district_key,panchayat_key,temp_user_type,temp_status) VALUES ('".$userKey."', '".$userName."', '".md5($passWord)."','".$name."','".$planId."','".$contact_number."','".$district."','".$panchayath."','".$userType."','".$status."')";
					
					
					
					if ($conn->query($sql) === TRUE) {
						
							$result['color']	=	"green"; 
							$result['msg']		=	"Dear ".$name.", welcome to Mediator Kerala. Your account created Successfully. One of our executive will contact you and will activate your account in the earliest as possible..";
							$conn->close();
							
							return $result;
						
						
					} else {
					  echo "Error: " . $sql . "<br>" . $conn->error;
					  $conn->close();
					  return false;
					} 
			
				}
				
		}
		
		function loadKeyByValue($table,$picker,$field,$value){
			
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql	=	"SELECT ".$picker." FROM ".$table." WHERE ".$field."='".$value."' LIMIT 1";
				$result = 	$conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc())
						$fieldValue	=	$row[$picker];
						return $fieldValue;
				}
			}
		}
		
		function loginUser($userName,$passWord){
			
		
			
			
			$a				=	null;
			$return			=	array();
			$userDetails	=	array();
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				//$sql	=	"SELECT id,status,user_key,name,user_type   FROM users WHERE user_name='".$userName."' AND password='".md5($passWord)."' LIMIT 1";
				$sql	=	"SELECT users.id,users.status,user_key,name,user_type,district_key,panchayat_key FROM users INNER JOIN agents ON users.id=agents.user_id WHERE user_name='".$userName."' AND password='".md5($passWord)."' LIMIT 1";
				
				//echo "QRY	:	".$sql;exit;
				
				$result = 	$conn->query($sql);
				if ($result->num_rows > 0) {
					
					while($row = $result->fetch_assoc()){
						$a['status']	=	$row['status'];
						$userDetails	=	$row;
					}	
					if($a['status']=='1'){
						$return['result']	=	$userDetails;
						$return['color']	=	"green";
						$return['msg']		=	"Logined Successfully";
						$return['status']	=	$a['status'];
						return $return;
					}
					 else if($a['status']=='0'){
						$return['result']	=	$userDetails;
						$return['status']	=	"false";
						$return['color']	=	"red";
						$return['msg']		=	"Thanks for choosing Mediator Kerala for your Real Estate Career. <br> Your Account is Under Review . Please contact Admin";
						$conn->close();
						return $return;
					}
					$conn->close();
				    return $return;
				  }
				  else{
					$return['status'] 	=	false;
					$return['color']	=	"red";
					$return['msg']		=	"Incorrect UserName or Password";
					$conn->close();
				    return $return;
				  }
					  
				}
			
			
		}
	}

?>