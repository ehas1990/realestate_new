<?php

	class Property{
	
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
		
		function addPanchayath( $panchayath, $district ){
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
								
				$sql	=	"SELECT panchayaths.id as panchayath_id,panchayath_name,district_name,districts.id as district_id FROM panchayaths INNER JOIN districts ON districts.id=panchayaths.district_id WHERE panchayath_name='".$panchayath."' AND  district_key='".$district."'";
				$result = 	$conn->query($sql);
				
				if ($result->num_rows > 0) {
					
					$return['status']	=	"false"; 
					$return['msg']		=	$panchayath." already added under ".$district;
					$return['color']	=	"red";
					$conn->close();
					return $return;
					
				}else{
					
					$districtId = $this -> loadKeyByValue("districts","id","district_key",$district);
					
					$sql	=	"INSERT INTO panchayaths (panchayath_key,district_id,panchayath_name,status) VALUES ( '".generateUniqueKey2('panchayaths','panchayath_key')."','".$districtId."','".$panchayath."','1' )";
					$result = 	$conn->query($sql);
					if ($result){
						
						$return['status']	=	"true"; 
						$return['msg']		=	$panchayath." added under ".$district;
						$return['color']	=	"green";
						$conn->close();
						return $return;
					}
				}
				
			}
		
		}
		
		function addDistrict($district){
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if(  !$this -> checkDuplicate("districts","district_name",$district)) {
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql	=	"INSERT INTO districts (district_key,district_name,status) VALUES ( '".generateUniqueKey2('districts','district_key')."','".$district."','1' )";
				
				$result = 	$conn->query($sql);
				if ($result) {
					
					$return['status']	=	"true"; 
					$return['msg']		=	"District name Added";
					$return['color']	=	"green";
					$conn->close();
					return $return;
				}
			}
			}else{
				
				$return['status']	=	"false"; 
				$return['msg']		=	"District name already exists";
				$return['color']	=	"red";
				$conn->close();
				return $return;
			}
		}
		
		function loadAllDistricts(){
			
			$districts	=	null;
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				$sql	=	"SELECT district_name,district_key FROM districts  WHERE status='1'";
				$result = 	$conn->query($sql);
				if ($result->num_rows > 0) {
					
					while($row = $result->fetch_assoc()){
						$a['district_name']	=	$row['district_name'];
						$a['district_key']	=	$row['district_key'];
						
						$districts[]=$a;
					}
					$conn->close();
				    return $districts;
				  }
				  else{
					$conn->close();
				    return false;
				  }
					  
				}
			
			
		}
		
		function loadAllPanchayatsByDistrictKey($dKey){
			
			$districtId		=	$this -> loadKeyByValue("districts","id","district_key",$dKey);
			
			$districts	=	array();
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				$sql	=	"SELECT panchayath_key,panchayath_name FROM panchayaths  WHERE district_id ='".$districtId."'";
				
				$result = 	$conn->query($sql);
				if ($result->num_rows > 0) {
					  return $result;
				  }
				  else{
					$conn->close();
				    return false;
				  }
					  
				}
			
			
		}
		
		// Load count
		
		function loadNumberOfPostsByUserKey($userKey){
			
			$userId = $this -> loadKeyByValue("users","id","user_key",$userKey);
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			$counter = 0;
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				$sql	=	"SELECT id FROM properties WHERE user_id='".$userId."'";
				
				$result = 	$conn->query($sql);
				
				if ($result->num_rows > 0) {
					
					$counter	= $result->num_rows;
					$conn->close();
					return $counter;
					}
					else{
					  
					$conn->close();
				    return false;
				  }
			}
		}
		
		// Load Count
		
		function loadPlanLimitByUserKey($uKey){
			
			$districts	=	null;
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			$limit = 0;
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				$sql	=	"SELECT post_limit FROM plans INNER JOIN users ON plans.id=users.plan_id  WHERE user_key='".$uKey."'";
				$result = 	$conn->query($sql);
				
				if ($result->num_rows > 0) {
					
					while($row = $result->fetch_assoc()){
						$limit	=	$row['post_limit'];
						
					}
					
					$conn->close();
				    return $limit;
				  }
				  else{
					$conn->close();
				    return $false;
				  }
					  
				}
			
			
		}
		
		function loadAllPanchayats(){
			
			$panchayaths	=	null;
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				$sql	=	"SELECT panchayath_name,panchayath_key FROM panchayaths  WHERE status='1'";
				$result = 	$conn->query($sql);
				if ($result->num_rows > 0) {
					
					while($row = $result->fetch_assoc()){
						$a['panchayath_name']	=	$row['panchayath_name'];
						$a['panchayath_key']	=	$row['panchayath_key'];
						
						$panchayaths[]=$a;
					}
					$conn->close();
				    return $panchayaths;
				  }
				  else{
					$conn->close();
				    return false;
				  }
					  
				}
			
			
		}
		
		// Executive Account Creation
		
		function addExecutive($executivename,$executiveemail,$password,$executivephone,$district,$panchayath,$userType='8',$userStatus='1'){
		
			$mobileDuplicator 	= $this -> checkDuplicate("agents","contact_number",$executivephone);
			
			if($mobileDuplicator){
				
				$result['status']	=	"false"; 
				$result['msg']		=	"Mobile Number Already Exists..";
				return $result;
			}
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
				
				if ($conn->connect_error) {
				  die("Connection failed: " . $conn->connect_error);
				}
				else{
					
					$userKey=	generateUniqueKey2("users","user_key");
					$sql = "INSERT INTO users (user_key , user_name, password,name,user_type,status) VALUES ('".$userKey."', '".$executiveemail."', '".md5($password)."','".$executivename."','".$userType."','".$userStatus."')";
					
					if ($conn->query($sql) === TRUE) {
						
						$userId = $this -> loadKeyByValue("users","id","user_key",$userKey);
						
						$sql2 = "INSERT INTO agents (agent_key,agent_name,contact_number,district_key,panchayat_key,user_id ,status) VALUES ('".generateUniqueKey2('agents','agent_key')."','".$executivename."','".$executivephone."','".$district."','".$panchayath."','".$userId."','1')";
						
						
						if ($conn->query($sql2) === TRUE){
							
							$result['status']	=	"true"; 
							$result['msg']		=	"Executive Account Created Successfully...";
						
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
		
		// Agent Class Codes
		
		function addAgent($agentname,$email,$password,$agentphone,$district,$panchayath,$userType='5',$userStatus='1',$plan_id){
		
			$mobileDuplicator 	= $this -> checkDuplicate("agents","contact_number",$agentphone);
			
			if($mobileDuplicator){
				
				$result['status']	=	"false"; 
				$result['msg']		=	"Mobile Number Already Exists..";
				return $result;
			}
			
			$emailDuplicator 	= $this -> checkDuplicate("users","user_name",$email);
			
			if($mobileDuplicator){
				
				$result['status']	=	"false"; 
				$result['msg']		=	"Email Already Exists..";
				return $result;
			}
			
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
				
				if ($conn->connect_error) {
				  die("Connection failed: " . $conn->connect_error);
				}
				else{
					
					$userKey=	generateUniqueKey22("users","user_key");
					$sql = "INSERT INTO users (user_key , user_name, password,name,user_type,status,plan_id) VALUES ('".$userKey."', '".$email."', '".md5($password)."','".$agentname."','".$userType."','".$userStatus."','".$plan_id."')";
					
					if ($conn->query($sql) === TRUE) {
						
						$userId = $this -> loadKeyByValue("users","id","user_key",$userKey);
						
						$sql2 = "INSERT INTO agents (agent_key,agent_name,contact_number,district_key,panchayat_key,user_id ,status) VALUES ('".generateUniqueKey22('agents','agent_key')."','".$agentname."','".$agentphone."','".$district."','".$panchayath."','".$userId."','1')";
						
						
						if ($conn->query($sql2) === TRUE){
							
							$result['status']	=	"true"; 
							$result['msg']		=	"Agent Account Created Successfully...";
						
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
		
		function updateAgent($agent_Key,$agentname,$username,$password,$agentphone,$district,$panchayath){
			
			$usersTableUpdate	=	0;
			$agentTableUpdate	=	0;
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$userId	=	$this -> loadKeyByValue("agents","user_id","agent_key",$agent_Key);
				
				$sql1 = "UPDATE users SET user_name='".$username."',password='".md5($password)."',name='".$agentname."'  WHERE id ='".$userId."'";
				
				
				if ($conn->query($sql1) === TRUE) {
					
				  $usersTableUpdate	=	1;
				  
				  $sql2 = "UPDATE agents SET agent_name ='".$agentname."',contact_number='".$agentphone."',district_key='".$district."', panchayat_key='".$panchayath."'  WHERE agent_key='".$agent_Key."'";
				  
				  
				  if ($conn->query($sql2) === TRUE)
						$agentTableUpdate	=	1;
				
				}
				
				if($usersTableUpdate==1 AND $agentTableUpdate==2)
					return true;
				else
					return false;
			}
			
			
		}
		
		function loadAgentDetailsByKey($agent_Key){
			
			$agentDetails = array();
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
				
				if ($conn->connect_error) {
				  die("Connection failed: " . $conn->connect_error);
				}
				else{
				
					$sql="SELECT agent_key,agents.agent_name,agents.contact_number,users.user_name,district_key,panchayat_key  FROM agents INNER JOIN users ON  agents.user_id=users.id WHERE agent_key='".$agent_Key."' LIMIT 1";
					
					
					$result	=	$conn-> query($sql);
					
					if($result->num_rows>0){
					
						while($row = $result->fetch_assoc()){
							
							$agentDetails	=	$row;
							
						}
					
					}
					
					
					
					$districts	=	$this -> loadAllDistricts();
					$panchayats	=	$this -> loadAllPanchayats();
					
				
					
					foreach($districts as $d){
						
						if($d["district_key"]==$agentDetails["district_key"])
							$agentDetails["district"]= $d["district_name"];
					}
					
					
					foreach($panchayats as $p){
						
						if($p["panchayath_key"]==$agentDetails["panchayat_key"])
							$agentDetails["panchayat"]= $p["panchayath_name"];
					}
					
					return $agentDetails;
				}
			
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
		
			
		function postProperty($propertyname,$propertyfor,$propertyprice,$propertyarea,$district,$panchayat,$bedrooms,$bathrooms,$floor,$parking,$description,$map=0,$status='0'){
		
			$propertyKey	=	null;
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				if(isset($_SESSION['user_key'])) {
				
					$propertyKey	=	generateUniqueKey2("properties","property_key");
					$userId 		= 	$this -> loadKeyByValue("users","id","user_key",$_SESSION['user_key']);
				
					$sql = "INSERT INTO properties (property_key,user_id,property_for,property_name,property_price,property_area,property_district,property_panchayat,property_bedroom,property_bathroom,property_floor,property_parking,property_description,property_map,property_status) VALUES ('".$propertyKey."', '".$userId."','".$propertyfor."','".$propertyname."','".$propertyprice."','".$propertyarea."','".$district."','".$panchayat."','".$bedrooms."','".$bathrooms."','".$floor."','".$parking."','".$description."','".$map."','".$status."')";
					
					if ($conn->query($sql) === TRUE) {
						
											
						$propertyId = $this -> loadKeyByValue("properties","id","property_key ",$propertyKey);
						$userId 	= $this -> loadKeyByValue("users","id","user_key",$_SESSION['user_key']);
						
						$return['propertyKey']=	$propertyKey;
						$return['userId']=	$userId;
						$return['propertyId']=	$propertyId;				
						$return['status']	=	"true"; 
						$return['color']	=	"green"; 
						$return['msg']		=	"Your Property Posted Successfully . It will be listed soon after verification..";
						$conn->close();
						return $return;
					}
					else {
						  echo "Error: " . $sql . "<br>" . $conn->error;
						  $return['status']	=	"false"; 
						  $return['color']	=	"red"; 
						  $return['msg']	=	$conn->error;
						  $conn->close();
						  return false;
					}
				}
				else{
					$return['status']	=	"false";
					$return['color']	=	"red";
					$return['msg']		=	"Please sign out and sign in again to post the property..";
					return $return;
						
				}
				
			}	
		
		}
		
		function loadPropertiesByStatus($status){
			
			$propertyDetails			=	array();
			$propertyDistrictDetails	=	array();
			$propertyFullDetails			=	array();
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql	=	"SELECT users.id as userid,property_name,name,property_for,property_key,property_district,property_panchayat,property_image,image_name,property_price,property_bedroom,property_bathroom,property_floor,property_parking,property_description  FROM users INNER JOIN properties ON users.id = properties.user_id WHERE properties.property_status='".$status."'";
				
				
				
				$result = 	$conn->query($sql);
				if ($result->num_rows > 0) {
					$districts	=	$this -> loadAllDistricts();
					$panchayats	=	$this -> loadAllPanchayats();
						
					
					while($row = $result->fetch_assoc()){
											
						$propertyDetails[]=$row;
					}
				
					foreach($propertyDetails as $property){
						
						foreach($districts as $district){
						
							if($property['property_district'] == $district['district_key'])
								
								$property['district']	=	$district['district_name'];
								
							
							
						}
						$propertyDistrictDetails[]	=	$property;
					}
					
					foreach($propertyDistrictDetails as $property){
						
						foreach($panchayats as $panchayat){
						
							if($property['property_panchayat'] == $panchayat['panchayath_key'])
								
								$property['panchayath']			=	$panchayat['panchayath_name'];
								
							
							
						}
						$propertyFullDetails[]	=	$property;
					}
					
					$conn->close();
				    return $propertyFullDetails;
				  }
				  else{
					$conn->close();
				    return false;
				  }
				
			}
		}	
		
			function searchForHome($for,$district,$panchayath){
			
			$propertyDetails			=	array();
			$propertyDistrictDetails	=	array();
			$propertyFullDetails			=	array();
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql	=	"SELECT users.id as userid,property_name,name,property_for,property_key,property_district,property_panchayat,property_image,image_name,property_price,property_bedroom,property_bathroom,property_floor,property_parking,property_description  FROM users INNER JOIN properties ON users.id = properties.user_id WHERE properties.property_for ='".$for."' AND properties.property_district='".$district."' AND properties.property_panchayat='".$panchayath."'";
				
				
				$result = 	$conn->query($sql);
				if ($result->num_rows > 0) {
					$districts	=	$this -> loadAllDistricts();
					$panchayats	=	$this -> loadAllPanchayats();
						
					
					while($row = $result->fetch_assoc()){
											
						$propertyDetails[]=$row;
					}
				
					foreach($propertyDetails as $property){
						
						foreach($districts as $district){
						
							if($property['property_district'] == $district['district_key'])
								
								$property['district']	=	$district['district_name'];
								
							
							
						}
						$propertyDistrictDetails[]	=	$property;
					}
					
					foreach($propertyDistrictDetails as $property){
						
						foreach($panchayats as $panchayat){
						
							if($property['property_panchayat'] == $panchayat['panchayath_key'])
								
								$property['panchayath']			=	$panchayat['panchayath_name'];
								
							
							
						}
						$propertyFullDetails[]	=	$property;
					}
					
					$conn->close();
				    return $propertyFullDetails;
				  }
				  else{
					$conn->close();
				    return false;
				  }
				
			}
		}
		
		function loadPropertiesByDistrictAndPanchath($district,$panchayath){
			
			$propertyDetails			=	array();
			$propertyDistrictDetails	=	array();
			$propertyFullDetails			=	array();
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql	=	"SELECT users.id as userid,property_name,name,property_key,property_district,property_panchayat,property_image,image_name,property_price,property_bedroom,property_bathroom,property_floor,property_parking,property_description,properties.property_status  FROM users INNER JOIN properties ON users.id = properties.user_id WHERE properties.property_district ='".$district."' AND properties.property_panchayat='".$panchayath."'";
				
				//echo " QRY =	:".$sql;
				//EXIT;	
				
				$result = 	$conn->query($sql);
				if ($result->num_rows > 0) {
					$districts	=	$this -> loadAllDistricts();
					$panchayats	=	$this -> loadAllPanchayats();
						
					
					while($row = $result->fetch_assoc()){
											
						$propertyDetails[]=$row;
					}
				
					foreach($propertyDetails as $property){
						
						foreach($districts as $district){
						
							if($property['property_district'] == $district['district_key'])
								
								$property['district']	=	$district['district_name'];
								
							
							
						}
						$propertyDistrictDetails[]	=	$property;
					}
					
					foreach($propertyDistrictDetails as $property){
						
						foreach($panchayats as $panchayat){
						
							if($property['property_panchayat'] == $panchayat['panchayath_key'])
								
								$property['panchayath']			=	$panchayat['panchayath_name'];
								
							
							
						}
						$propertyFullDetails[]	=	$property;
					}
					
					$conn->close();
				    return $propertyFullDetails;
				  }
				  else{
					$conn->close();
				    return false;
				  }
				
			}
			
		}
		
		function updateImageTable($img_key,$userId,$propertyId,$imageName,$imageExtension,$propertyKey,$imageType,$status='1'){
			
			$imageKey	=	null;
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql = "INSERT INTO propertyimages (img_key ,property_id,user_id,img_name,img_extension,img_folder_key,img_type,img_status) VALUES ('".$img_key."','".$propertyId."','".$userId."','".$imageName."','".$imageExtension."','".$propertyKey."','".$imageType."','".$status."')";
						
				
				if ($conn->query($sql) === TRUE) {
					
					$sql2 = "UPDATE properties SET property_image='".$img_key."',image_name='".$imageName."'  WHERE id  ='".$propertyId."'";
						
						if ($conn->query($sql2) === TRUE) {
							
							$result['status']	=	"true"; 
							$result['msg']		=	"Image Uploaded ..";
							$conn->close();
							return $result;
						
						}
							
				} else {
						  echo "Error: " . $sql . "<br>" . $conn->error;
							$conn->close();
						  return false;
				}
				exit;
			}
		}
		
		function updateImageTable2($img_key,$userId,$propertyId,$imageName,$imageExtension,$propertyKey,$imageType,$status='1'){
			
			$imageKey	=	null;
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql = "INSERT INTO propertyimages (img_key ,property_id,user_id,img_name,img_extension,img_folder_key,img_type,img_status) VALUES ('".$img_key."','".$propertyId."','".$userId."','".$imageName."','".$imageExtension."','".$propertyKey."','".$imageType."','".$status."')";
						
				
				if ($conn->query($sql) === TRUE) {
					
					$sql2 = "UPDATE properties SET image2='".$img_key."',image_name2='".$imageName."'  WHERE id  ='".$propertyId."'";
						
						if ($conn->query($sql2) === TRUE) {
							
							$result['status']	=	"true"; 
							$result['msg']		=	"Image Uploaded ..";
							$conn->close();
							return $result;
						
						}
							
				} else {
						  echo "Error: " . $sql . "<br>" . $conn->error;
							$conn->close();
						  return false;
				}
				exit;
			}
		}
		
		function updateImageTable3($img_key,$userId,$propertyId,$imageName,$imageExtension,$propertyKey,$imageType,$status='1'){
			
			$imageKey	=	null;
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql = "INSERT INTO propertyimages (img_key ,property_id,user_id,img_name,img_extension,img_folder_key,img_type,img_status) VALUES ('".$img_key."','".$propertyId."','".$userId."','".$imageName."','".$imageExtension."','".$propertyKey."','".$imageType."','".$status."')";
						
				
				if ($conn->query($sql) === TRUE) {
					
					$sql2 = "UPDATE properties SET image3='".$img_key."',image_name3='".$imageName."'  WHERE id  ='".$propertyId."'";
						
						if ($conn->query($sql2) === TRUE) {
							
							$result['status']	=	"true"; 
							$result['msg']		=	"Image Uploaded ..";
							$conn->close();
							return $result;
						
						}
							
				} else {
						  echo "Error: " . $sql . "<br>" . $conn->error;
							$conn->close();
						  return false;
				}
				exit;
			}
		}
		
		function updateImageTable4($img_key,$userId,$propertyId,$imageName,$imageExtension,$propertyKey,$imageType,$status='1'){
			
			$imageKey	=	null;
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql = "INSERT INTO propertyimages (img_key ,property_id,user_id,img_name,img_extension,img_folder_key,img_type,img_status) VALUES ('".$img_key."','".$propertyId."','".$userId."','".$imageName."','".$imageExtension."','".$propertyKey."','".$imageType."','".$status."')";
						
				
				if ($conn->query($sql) === TRUE) {
					
					$sql2 = "UPDATE properties SET image4='".$img_key."',image_name4='".$imageName."'  WHERE id  ='".$propertyId."'";
						
						if ($conn->query($sql2) === TRUE) {
							
							$result['status']	=	"true"; 
							$result['msg']		=	"Image Uploaded ..";
							$conn->close();
							return $result;
						
						}
							
				} else {
						  echo "Error: " . $sql . "<br>" . $conn->error;
							$conn->close();
						  return false;
				}
				exit;
			}
		}
		
		function loadPropertiesByUserKey($userKey){
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				//$sql	=	"SELECT agent_name,";
				$result = 	$conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc())
						$fieldValue	=	$row[$picker];
						return $fieldValue;
				}
			}
		}
		
		function changePropertyStatus($propertyKey,$status){
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql = "UPDATE properties SET property_status ='".$status."' WHERE property_key ='".$propertyKey."'";
				
				if ($conn->query($sql) === TRUE) {
				  return true;
				} else {
				  return false;
				}
			}
		}
		
		function loadPropertyDetailsByKey($property_Key){
			
			$propertyDetails			=	array();
			$propertyDistrictDetails	=	array();
			$propertyFullDetails			=	array();
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql	=	"SELECT users.id as userid,property_name,name,property_key,property_district,property_panchayat,property_image,image2,image3,image4,image_name,image_name2,image_name3,image_name4,property_price,property_bedroom,property_bathroom,property_floor,property_parking,property_description,property_area  FROM users INNER JOIN properties ON users.id = properties.user_id WHERE properties.property_key ='".$property_Key."' LIMIT 1";
				
				
				
				$result = 	$conn->query($sql);
				if ($result->num_rows > 0) {
					$districts	=	$this -> loadAllDistricts();
					$panchayats	=	$this -> loadAllPanchayats();
						
					
					while($row = $result->fetch_assoc()){
											
						$propertyDetails[]=$row;
					}
					
					
					//op($propertyDetails);
					//exit;
					
					foreach($propertyDetails as $property){
						
						$propertyImages	=	array();
						
						foreach($districts as $district){
						
							if($property['property_district'] == $district['district_key'])
								
								$property['district']	=	$district['district_name'];
								
							
							
						}
						
						
						
						$propertyDistrictDetails[]	=	$property;
					}
					
					foreach($propertyDistrictDetails as $property){
						
						foreach($panchayats as $panchayat){
						
							if($property['property_panchayat'] == $panchayat['panchayath_key'])
								
								$property['panchayath']			=	$panchayat['panchayath_name'];
								
							
							
						}
						$propertyFullDetails[]	=	$property;
					}
					
					$conn->close();
				    return $propertyFullDetails;
				  }
				  else{
					$conn->close();
				    return false;
				  }
				
			}
		}
		
		function loadAgentDetailsByUserId($userId){
			
		
			
			$agentKey		=	$this -> loadKeyByValue("agents","agent_key","user_id",$userId);	
			
			$agentDetails	=	$this -> loadAgentDetailsByKey($agentKey);
			if($agentDetails){
				
				
				return $agentDetails;
				
			}
			else{
				
				$return["status"]="false";
				$return["color"]="red";
				return $return;
				
			}
			
		}
		
		function loadSimilarProperties($propertyKey,$dKey,$pKey){
			
			$propertyDetails			=	array();
			$propertyDistrictDetails	=	array();
			$propertyFullDetails			=	array();
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql	=	"SELECT users.id as userid,property_name,name,property_key,property_district,property_panchayat,property_image,image_name,property_price,property_bedroom,property_bathroom,property_floor,property_parking,property_area,property_description  FROM users INNER JOIN properties ON users.id = properties.user_id WHERE property_district='".$dKey."' AND  property_panchayat='".$pKey."' AND property_key!='".$propertyKey."'";
				
				
				
				$result = 	$conn->query($sql);
				if ($result->num_rows > 0) {
					$districts	=	$this -> loadAllDistricts();
					$panchayats	=	$this -> loadAllPanchayats();
						
					
					while($row = $result->fetch_assoc()){
											
						$propertyDetails[]=$row;
					}
				
					foreach($propertyDetails as $property){
						
						foreach($districts as $district){
						
							if($property['property_district'] == $district['district_key'])
								
								$property['district']	=	$district['district_name'];
								
							
							
						}
						$propertyDistrictDetails[]	=	$property;
					}
					
					foreach($propertyDistrictDetails as $property){
						
						foreach($panchayats as $panchayat){
						
							if($property['property_panchayat'] == $panchayat['panchayath_key'])
								
								$property['panchayath']			=	$panchayat['panchayath_name'];
								
							
							
						}
						$propertyFullDetails[]	=	$property;
					}
					
					$conn->close();
				    return $propertyFullDetails;
				  }
				  else{
					$conn->close();
				    return false;
				  }
				
			}
		}
		
		function loadPropertiesByAgentKey($agentKey){
			
			$propertyDetails			=	array();
			$propertyDistrictDetails	=	array();
			$propertyFullDetails			=	array();
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql	=	"SELECT users.id as userid,property_name,name,property_key,property_district,property_panchayat,property_image,image_name,property_price,property_bedroom,property_bathroom,property_floor,property_parking,property_description,properties.property_status  FROM users INNER JOIN properties ON users.id = properties.user_id WHERE users.user_key  ='".$agentKey."'";
				
				//echo " QRY =	:".$sql;
				//EXIT;	
				
				$result = 	$conn->query($sql);
				if ($result->num_rows > 0) {
					$districts	=	$this -> loadAllDistricts();
					$panchayats	=	$this -> loadAllPanchayats();
						
					
					while($row = $result->fetch_assoc()){
											
						$propertyDetails[]=$row;
					}
				
					foreach($propertyDetails as $property){
						
						foreach($districts as $district){
						
							if($property['property_district'] == $district['district_key'])
								
								$property['district']	=	$district['district_name'];
								
							
							
						}
						$propertyDistrictDetails[]	=	$property;
					}
					
					foreach($propertyDistrictDetails as $property){
						
						foreach($panchayats as $panchayat){
						
							if($property['property_panchayat'] == $panchayat['panchayath_key'])
								
								$property['panchayath']			=	$panchayat['panchayath_name'];
								
							
							
						}
						$propertyFullDetails[]	=	$property;
					}
					
					$conn->close();
				    return $propertyFullDetails;
				  }
				  else{
					$conn->close();
				    return false;
				  }
				
			}
			
		}
		
		
		function deleteProperty($pKey){
			
			
			$folder1		=	$pKey;
			$folder2		=	array();
			$file_name		=	null;
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$propertyId		=	$this -> loadKeyByValue("properties","id","property_key",$pKey);
				
				$sql=	"DELETE FROM properties WHERE property_key='".$pKey."'";
				$result = 	$conn->query($sql);
				
				if ($result) {
					
					$sql2=	"SELECT img_key,id,img_name FROM propertyimages WHERE property_id='".$propertyId."'";
					$result = 	$conn->query($sql2);
					
					if ($result->num_rows > 0) {
						
						while($row = $result->fetch_assoc()){
												
							$folder2[]=$row;
						}
						
					
						$sql3=	"DELETE FROM propertyimages WHERE property_id ='".$propertyId."'";
						
						$result = 	$conn->query($sql3);
						if ($result){
							
							for($i=0;$i<sizeof($folder2);$i++){
								
								
								
								$fileToDelete1	=	"uploads/".$folder1."/".$folder2[$i]['img_key']."/".$folder2[$i]['img_name'];
								
								unlink($fileToDelete1);
								
								rmdir("uploads/".$folder1."/".$folder2[$i]['img_key']);
								
								
								
							}
							rmdir("uploads/".$folder1);
							$conn->close();
							return true;
							
						}else{
							$conn->close();
							return false;
						}
					}
				
				}
			}
		
		}
	}

?>