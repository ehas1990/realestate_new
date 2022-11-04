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
				
		function registerUser($name,$userName,$passWord,$userType='2',$status='0'){
			
			$userNameDuplicator = $this -> checkDuplicate("users","user_name",$userName);
			//$mobileDuplicator 	= $this -> checkDuplicate("users","phone_number",$phoneNumber);
			
			if($userNameDuplicator){
				
				$result['status']	=	"false"; 
				$result['msg']		=	"Email Already Exists..";
				return $result;
			}
			/*
			if($mobileDuplicator){
				
				$result['status']	=	"false"; 
				$result['msg']		=	"Mobile Number Already Exists..";
				return $result;
			}
			*/
			
				$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
				
				if ($conn->connect_error) {
				  die("Connection failed: " . $conn->connect_error);
				}
				else{
					
					$userKey=	generateUniqueKey();
					$sql = "INSERT INTO users (user_key , user_name, password,name,user_type,status) VALUES ('".$userKey."', '".$userName."', '".md5($passWord)."','".$name."','".$userType."','".$status."')";
					
					if ($conn->query($sql) === TRUE) {
						
						$userId = $this -> loadKeyByValue("users","id","user_key",$userKey);
						
						$sql2 = "INSERT INTO agents (agent_key,agent_name,user_id ,status) VALUES ('".generateUniqueKey()."','".$name."','".$userId."','".$status."')";
						
						
						if ($conn->query($sql2) === TRUE){
							
							$result['status']	=	"true"; 
							$result['msg']		=	"Account Created Successfully...";
						
						}
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
						$return['msgcolor']	=	"green";
						$return['msg']		=	"Logined Successfully";
						$return['status']	=	$a['status'];
						return $return;
					}
					 else if($a['status']=='0'){
						$return['result']	=	$userDetails;
						$return['status']	=	"false";
						$return['msgcolor']	=	"red";
						$return['msg']		=	"Your Account is Under Review . Please contact Admin";
						$conn->close();
						return $return;
					}
					$conn->close();
				    return $return;
				  }
				  else{
					  
					$return['msgcolor']	=	"red";
					$return['msg']		=	"Incorrect UserName or Password";
					$conn->close();
				    return $return;
				  }
					  
				}
			
			
		}
	}

?>