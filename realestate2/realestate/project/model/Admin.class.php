<?php

	class Admin{
	
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
		
		function loadAllAgents(){
			
			$agentDetails	=	array();
			$agentPanchayathDetails 	= array();
			$agentDistrictDetails 	= array();
			$allAgentDetails	=	array();
			$districts	=	null;
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				$sql	=	"SELECT users.user_key,agent_key,agent_name,contact_number,district_key,panchayat_key,users.status,users.user_type  FROM users INNER JOIN agents ON users.id=agents.user_id";
				
				
				$result = 	$conn->query($sql);
				if ($result->num_rows > 0) {
					
					$districts	=	$this -> loadAllDistricts();
					$panchayaths	=	$this -> loadAllPanchayaths();
					
					
					
					while($row = $result->fetch_assoc()){
												
						$agentDetails[]=$row;
					}
					
					
					
					foreach($agentDetails as $agent){
						
						foreach($districts as $district){
						
							if($agent['district_key'] == $district['district_key'])
								$agent['district']	=	$district['district_name'];
							
						
						}
						$agentDistrictDetails[]	=	$agent;
					}
					
					
					foreach($agentDistrictDetails as $agent){
						
						foreach($panchayaths as $panchayath){
						
							if($agent['panchayat_key'] == $panchayath['panchayath_key'])
								$agent['panchayath']	=	$panchayath['panchayath_name'];
							
						
						}
						$allAgentDetails[]	=	$agent;
					}
					
					
					
					$conn->close();
				    return $allAgentDetails;
				  }
				  else{
					$conn->close();
				    return $false;
				  }
					  
				}
			
			
		}
		
		function loadAllDistricts(){
			
			$districtDetails	=	array();
			$districts	=	null;
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				$sql	=	"SELECT district_name,district_key  FROM districts  WHERE status='1'";
				$result = 	$conn->query($sql);
				if ($result->num_rows > 0) {
					
					while($row = $result->fetch_assoc()){
												
						$districtDetails[]=$row;
					}
					$conn->close();
				    return $districtDetails;
				  }
				  else{
					$conn->close();
				    return $false;
				  }
					  
				}
			
			
		}
		
		
		function loadAllPanchayaths(){
			
			$panchayathDetails	=	array();
			$districts	=	null;
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				$sql	=	"SELECT panchayath_name,panchayath_key  FROM panchayaths  WHERE status='1'";
				$result = 	$conn->query($sql);
				if ($result->num_rows > 0) {
					
					while($row = $result->fetch_assoc()){
												
						$panchayathDetails[]=$row;
					}
					$conn->close();
				    return $panchayathDetails;
				  }
				  else{
					$conn->close();
				    return $false;
				  }
					  
				}
			
			
		}
		
		function agentKeyToUserKey($agentKey){
			
			$userKey=0;
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			if ($conn->connect_error) {
				  die("Connection failed: " . $conn->connect_error);
				}
			else{	
				
				$sql	=	"SELECT users.user_key FROM users INNER JOIN agents ON users.id = agents.user_id WHERE agent_key='".$agentKey."' LIMIT 1";
				
				$result = 	$conn->query($sql);
				
				if ($result->num_rows > 0) {
						
						while($row = $result->fetch_assoc()){
													
							$userKey=$row['user_key'];
						}
				return $userKey;
				
				}
			}	
		//--	
		}
		
		function changeAgentStatus($agentKey,$newStatus){
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$userKey	=	$this -> agentKeyToUserKey($agentKey);
				
				$sql = "UPDATE users SET status='".$newStatus."' WHERE user_key ='".$userKey."'";
				
				if ($conn->query($sql) === TRUE) {
				  return true;
				} else {
				  return false;
				}
			}
			
		}
	}

?>