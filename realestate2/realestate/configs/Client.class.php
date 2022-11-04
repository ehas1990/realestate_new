<?php

	class Client{
		
				
		private $client_password_salt ="&^Entay#Guruvinte*&%Dasan!!!!&*Sunil";
		private $db;
		private $connection;
		private $userKey;
		private $logined;
		
		private $email;
		private $password;
		
		public function __construct(){
			
			global $db,$connection,$smarty,$client;
			
			$this -> db 		=& $db;
			$this -> smarty 	=& $smarty;
			$this -> client 	=& $client;
			
			if(isset(($_SESSION["logined"]))){
								
				$this -> loginUser(getSession("email"),getSession("password"));
				
			}
			
		}
		
		function loginUser($email,$password){
			
			$uKey;
			
			$sql = "SELECT id,C_Key FROM clients  WHERE Client_Email='".$email."' AND Password='".md5($password)."' LIMIT 1";
			
			if(!$this->db->connection) {
				
				echo ("Connect failed: %s<br />". $this->db ->connection->connect_error);
				
			}
			
			if ($result = $this->db ->connection->query($sql)) {
				
				
				if ($result->num_rows > 0) {
				  
					while($row = $result->fetch_assoc()){
						
						$uKey=$row['C_Key'];
						
					}
				 
				 $_SESSION["logined"]=1;
				 $_SESSION["uKey"]=$email;
				 $_SESSION["email"]=$uKey;
				 $_SESSION["password"]=$password;
				 
				 
				 
				 
				 $this -> logined	=1;
				 $this -> userKey	=$uKey;
				 $this -> email		=$email;
				 $this -> password	=md5($password);
				 
				 
				 return true;
				} else {
				  return false;
				}
				
				
				
			}
			else
				return false;
			
				
			
		}
		
		function registerUser($clientName,$businessName,$email,$passWord,$contactNumber=NULL){
			
			$ckey = generateUniqueKey("Clients","C_key",10);
			
			$sql = "INSERT INTO clients (C_Key,Client_Name,Business_Name,Client_Email,Password,Client_Phone,Status) VALUES ('".$ckey."','".$clientName."','".$businessName."','".$email."','".md5($passWord)."','".$contactNumber."','1')";
			
			if(!$this->db->connection) {
				echo ("Connect failed: %s<br />". $this->db ->connection->connect_error);
				exit();
			}
			
			
			
			if ($result = $this->db ->connection->query($sql)) {
				
			 
			return true;
			  
			}
			else
				return false;
		}
		
		
		function logOut(){
			
			
			$_SESSION["logined"]=NULL;
			$_SESSION["uKey"]=NULL;
			$_SESSION["email"]=NULL;
			$_SESSION["password"]=NULL;
	
		}
		
		
		
	}
	
	?>