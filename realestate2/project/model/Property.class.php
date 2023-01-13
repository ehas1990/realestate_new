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
					$districtName		=	$this -> loadKeyByValue("districts","district_name","district_key",$district);
					$return['status']	=	"false"; 
					$return['msg']		=	$panchayath." already added under ".$districtName;
					$return['color']	=	"red";
					$conn->close();
					return $return;
					
				}else{
					
					$districtId = $this -> loadKeyByValue("districts","id","district_key",$district);
					
					$sql	=	"INSERT INTO panchayaths (panchayath_key,district_id,panchayath_name,status) VALUES ( '".generateUniqueKey2('panchayaths','panchayath_key')."','".$districtId."','".$panchayath."','1' )";
					$result = 	$conn->query($sql);
					if ($result){
						
						$return['status']	=	"true"; 
						$return['msg']		=	$panchayath." added";
						$return['color']	=	"green";
						$conn->close();
						return $return;
					}
					else {
						$return['status']	=	"false"; 
						$return['msg']		=	"Not able to add ".$panchayath." under the Selected District";
						$return['color']	=	"red";
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
				
				$sql	=	"SELECT id as district_id,district_name,district_key,popular FROM districts  WHERE status='1'";
				$result = 	$conn->query($sql);
				if ($result->num_rows > 0) {
					
					while($row = $result->fetch_assoc()){
						$a['district_name']	=	$row['district_name'];
						$a['district_key']	=	$row['district_key'];
						$a['district_id']	=	$row['district_id'];
						$a['popular']		=	$row['popular'];
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
		
	
		
		function loadPlace($districtKey,$panchayathKey){
			
			$district				=	$this -> loadKeyByValue("districts","district_name","district_key",$districtKey);
			$panchayath				=	$this -> loadKeyByValue("panchayaths","panchayath_name","panchayath_key",$panchayathKey);
			$result["district"]		=	$district;
			$result["panchayath"]	=	$panchayath;
			return $result;
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
		
		function loadNumberOfPostsByPropertyKey($pKey){
			
			$userId = $this -> loadKeyByValue("properties","user_id","property_key",$pKey);
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
				    return false;
				  }
					  
				}
			
			
		}
		
		function loadPlanLimitByPropertyKey($pKey){
			
			$districts	=	null;
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			$limit = 0;
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$user_Id = $this -> loadKeyByValue("properties","user_id","property_key",$pKey);
				
				$sql	=	"SELECT post_limit FROM plans INNER JOIN users ON plans.id=users.plan_id  WHERE users.id='".$user_Id."'";
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
				    return false;
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
				$sql	=	"SELECT panchayath_name,panchayath_key,district_id,panchayath_popular  FROM panchayaths  WHERE status='1'";
				$result = 	$conn->query($sql);
				if ($result->num_rows > 0) {
					
					while($row = $result->fetch_assoc()){
						$a['panchayath_name']	=	$row['panchayath_name'];
						$a['panchayath_key']	=	$row['panchayath_key'];
						$a['district_id']		=	$row['district_id'];
						$a['panchayath_popular']=	$row['panchayath_popular'];
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
		
		
		function addDistrictExecutive($executivename,$executiveemail,$password,$executivephone,$district,$userType='9',$userStatus='1',$panchayath=0){
		
			$mobileDuplicator 	= $this -> checkDuplicate("agents","contact_number",$executivephone);
			
			if($mobileDuplicator){
				
				$result['status']	=	"false"; 
				$result['color']	=	"red";
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
							
							$return['status']	=	"true"; 
							$return['msg']		=	"Executive Account Created Successfully...";
							$return['color']	=	"green"; 
						
						}
						$conn->close();
						return $return;
					} else {
						 
						  $return['status']	=	"true"; 
						  $return['msg']	=	$conn->error;
						  $return['color']	=	"red";
						  $conn->close();
						  return $return;
					}
				}
		}
		// Executive Account Creation
		
		function addExecutive($executivename,$executiveemail,$password,$executivephone,$district,$panchayath,$userType='8',$userStatus='1'){
		
			$mobileDuplicator 	= $this -> checkDuplicate("agents","contact_number",$executivephone);
			
			if($mobileDuplicator){
				
				$result['status']	=	"false"; 
				$result['color']	=	"red";
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
							
							$return['status']	=	"true"; 
							$return['msg']		=	"Executive Account Created Successfully...";
							$return['color']	=	"green"; 
						
						}
						$conn->close();
						return $return;
					} else {
						 
						  $return['status']	=	"true"; 
						  $return['msg']	=	$conn->error;
						  $return['color']	=	"red";
						  $conn->close();
						  return $return;
					}
				}
		}
		
		// Agent Class Codes
		
		function addAgent($agentname,$email,$password,$agentphone,$district,$panchayath,$plan,$userType='5',$userStatus='1',$plan_id){
			
			global $points;
			
			$mobileDuplicator 	= $this -> checkDuplicate("agents","contact_number",$agentphone);
			
			if($mobileDuplicator){
				
				$result['status']	=	"false"; 
				$result['msg']		=	"Mobile Number Already Exists..";
				$result['color']	=	"red";
				return $result;
			}
			
			$emailDuplicator 	= $this -> checkDuplicate("users","user_name",$email);
			
			if($mobileDuplicator){
				
				$result['status']	=	"false"; 
				$result['msg']		=	"Email Already Exists..";
				$result['color']	=	"red";
				return $result;
			}
			
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
				
				if ($conn->connect_error) {
				  die("Connection failed: " . $conn->connect_error);
				}
				else{
					
					$userKey		=	generateUniqueKey2("users","user_key");
					$record_key 	= 	generateUniqueKey2("agent_records","record_key");
					$agent_photo_key=	generateUniqueKey2("agent_records","agent_photo_key");
					$agent_aadhar_key=	generateUniqueKey2("agent_records","agent_aadhar_key");
					
					$sql = "INSERT INTO users (user_key , user_name, password,name,user_type,status,plan_id) VALUES ('".$userKey."', '".$email."', '".md5($password)."','".$agentname."','".$userType."','".$userStatus."','".$plan_id."')";
					
					if ($conn->query($sql) === TRUE) {
						
						$userId = $this -> loadKeyByValue("users","id","user_key",$userKey);
						
						$sql2 = "INSERT INTO agents (agent_key,agent_name,contact_number,district_key,panchayat_key,user_id ,status) VALUES ('".generateUniqueKey2('agents','agent_key')."','".$agentname."','".$agentphone."','".$district."','".$panchayath."','".$userId."','1')";
						
						
						if ($conn->query($sql2) === TRUE){
							
							$sql5 = "INSERT INTO agent_records (record_key,user_key,agent_photo_key,agent_aadhar_key,agent_record_status) VALUES ('".$record_key."', '".$userKey."','".$agent_photo_key."','".$agent_aadhar_key."','0')";
							if ($conn->query($sql5) === TRUE){
								
								//---------------------
								$pending_amount 	=    $this -> loadKeyByValue("plans","price","plan_key",$plan);
								$payment_key		=	 generateUniqueKey2('payments','payment_key');
								$balance_amount		=	 0-$pending_amount;
								$invoice_key		=	 generateUniqueKey2('invoices','invoice_key');
								$invoice_public_key	=	 substr( generateUniqueKey2('invoices','public_key'),5);
								$planTitle			=	 $this -> loadKeyByValue("plans","plan","plan_key",$plan);
								$expDate			=	 strtotime("+1 day");
								$invoiceTitle 		=	"Membership Plan price for ".$planTitle;
								$payment_history_key=	 generateUniqueKey2('payment_history','payment_history_key');
								
								$sql6 = "INSERT INTO invoices (invoice_key,public_key,user_id,amount,description,pending_amount,created_on,expired_on,status) VALUES('".$invoice_key."','".$invoice_public_key."',".$userId.",".$pending_amount.",'".$invoiceTitle."','".$pending_amount."',".time().",".$expDate.",'0')";	
								
								if ($conn->query($sql6) === true) {
									
									$invoiceId2 = $this -> loadKeyByValue("invoices","id","invoice_key",$invoice_key);
									$sql7 = "INSERT INTO payments( payment_key,user_id,invoice_id,amount_pending,balance_amount,added_on,status) VALUES ('".$payment_key."','".$userId."','".$invoiceId2."','".$pending_amount."','".$pending_amount."','".time()."','0')";
									if ($conn->query($sql7) === true){

										$payment_id			=	 $this -> loadKeyByValue("payments","id","payment_key",$payment_key);
										$sql8 				= "INSERT INTO payment_history( payment_history_key,payment_id,user_id,invoice_id,amount_deducted,details,deduct_on,status) VALUES ('".$payment_history_key."','".$payment_id."','".$userId."','".$invoiceId2."',".$pending_amount.",'Membership Payment',".time().",'0')";
										if ($conn->query($sql8) === true){
																		
											$this -> insertPoint($userId,$points["activation"],"New User Account Activatio By Admin..");
											
											$result['status']	=	"true"; 
											$result['msg']		=	"Agent Account Created Successfully...";
											$result['color']	=	"green";
											$conn->close();
											
											return $result;
																		
										}else{
											
											$result['msg']		=	"Insert in to Payment History Table Error";
											$result['color']		=	"red";
											$conn->close();
											return $result;	
										}
																

									}else{
										
										$result['msg']		=	"Insert in to Payment Table Error";
										$result['color']		=	"red";
										$conn->close();
										return $result;
										
									}

								}else{
									
									$result['msg']		=	"Insert in to Invoice Table Error";
									$result['color']		=	"red";
									$conn->close();
									return $result;
								
								}
								
								
								
							}else{
								
								$result['msg']		=	"Insert in to Agent Records Table Error";
								$result['color']		=	"red";
								$conn->close();
								return $result;
							}	
							
						}else{
							
						  $result['msg']		=	"Insert in to Agent Table Error";
						  $result['color']		=	"red";
						  $conn->close();
						  return $result;
							
						}
						
					} else {
						  
						  $result['msg']		=	"Insert in to Users Table Error";
						  $result['color']		=	"red";
						  $conn->close();
						  return $result;
					}
					
				}
		}
		
		
		
		function loadDistrictNameByKey($dKey){
			$districtDetails	=	array();
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql	=	"SELECT district_name FROM districts WHERE district_key='".$dKey."' LIMIT 1";
				$result	=	$conn-> query($sql);
					
					if($result->num_rows>0){
					
						while($row = $result->fetch_assoc()){
							
							$districtDetails	=	$row;
							
						}
						return $districtDetails;
					}
					else
						return false;
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
				
				
				
				if($usersTableUpdate==1 AND $agentTableUpdate==1){
				
					$return["msg"] 		=	"Agent Account Updated Successfully";
					$return["color"]	=	"green"; 
					$conn->close();
					return $return;
				}
				else{
					$return["msg"] 		=	"Not Able to Update Agent Account";
					$return["color"]	=	"red"; 
					$conn->close();
					return $return;
				}
				
			}
			
			
		}
		
		function updateMyAccountByExecutive($agent_key,$agentname,$username,$password,$agentphone,$district,$panchayath){
			
			$userId	=	$this -> loadKeyByValue("agents","user_id","agent_key",$agent_key);
			$agentId=	$this -> loadKeyByValue("agents","id","agent_key",$agent_key);
			
			$usersTableUpdate	=	0;
			$agentTableUpdate	=	0;
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				
				$sql1 = "UPDATE users SET user_name='".$username."',password='".md5($password)."',name='".$agentname."'  WHERE id ='".$userId."'";
				
				
				if ($conn->query($sql1) === TRUE) {
					
				  $usersTableUpdate	=	1;
				  
				  $sql2 = "UPDATE agents SET agent_name ='".$agentname."',contact_number='".$agentphone."',district_key='".$district."', panchayat_key='".$panchayath."'  WHERE agent_key='".$agent_key."'";
				 
				  
				  if ($conn->query($sql2) === TRUE)
						$agentTableUpdate	=	1;
				
				}
				
				
				
				if($usersTableUpdate==1 AND $agentTableUpdate==1){
				
					$return["msg"] 		=	$agentname." Profile Updated Successfully";
					$return["color"]	=	"green"; 
					$conn->close();
					return $return;
				}
				else{
					$return["msg"] 		=	"Not Able to Update ".$agentname." Profile . Please contact Admin..";
					$return["color"]	=	"red"; 
					$conn->close();
					return $return;
				}
				
			}
			
			
		}
		
		function updateMyAccount($userKey,$agentname,$username,$password,$agentphone,$district,$panchayath){
			
			$userId	=	$this -> loadKeyByValue("users","id","user_key",$userKey);
			$agentId=	$this -> loadKeyByValue("agents","agent_key","user_id",$userId);
			
			$usersTableUpdate	=	0;
			$agentTableUpdate	=	0;
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				
				$sql1 = "UPDATE users SET user_name='".$username."',password='".md5($password)."',name='".$agentname."'  WHERE id ='".$userId."'";
				
				
				if ($conn->query($sql1) === TRUE) {
					
				  $usersTableUpdate	=	1;
				  
				  $sql2 = "UPDATE agents SET agent_name ='".$agentname."',contact_number='".$agentphone."',district_key='".$district."', panchayat_key='".$panchayath."'  WHERE agent_key='".$agentId."'";
				  
				  
				  
				  if ($conn->query($sql2) === TRUE)
						$agentTableUpdate	=	1;
				
				}
				
				
				
				if($usersTableUpdate==1 AND $agentTableUpdate==1){
				
					$return["msg"] 		=	"Your Profile Updated Successfully";
					$return["color"]	=	"green"; 
					$conn->close();
					return $return;
				}
				else{
					$return["msg"] 		=	"Not Able to Update Your Profile . Please contact Admin..";
					$return["color"]	=	"red"; 
					$conn->close();
					return $return;
				}
				
			}
			
			
		}
		
		function updateAccountofAgent2($userKey,$agentname,$username,$password,$agentphone,$district,$panchayath){
			
			$userId	=	$this -> loadKeyByValue("users","id","user_key",$userKey);
			$agentKey	=	$this -> loadKeyByValue("agents","agent_key","user_id",$userId);
			
			$usersTableUpdate	=	0;
			$agentTableUpdate	=	0;
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				
				$sql1 = "UPDATE users SET user_name='".$username."',password='".md5($password)."',name='".$agentname."'  WHERE id ='".$userId."'";
				
				
				if ($conn->query($sql1) === TRUE) {
					
				  $usersTableUpdate	=	1;
				  
				  $sql2 = "UPDATE agents SET agent_name ='".$agentname."',contact_number='".$agentphone."',district_key='".$district."', panchayat_key='".$panchayath."'  WHERE agent_key='".$agentKey."'";
				  
				  
				  
				  if ($conn->query($sql2) === TRUE)
						$agentTableUpdate	=	1;
				
				}
				
				
				
				if($usersTableUpdate==1 AND $agentTableUpdate==1){
				
					$return["msg"] 		=	"Your Profile Updated Successfully";
					$return["color"]	=	"green"; 
					$conn->close();
					return $return;
				}
				else{
					$return["msg"] 		=	"Not Able to Update Your Profile . Please contact Admin..";
					$return["color"]	=	"red"; 
					$conn->close();
					return $return;
				}
				
			}
			
			
		}
		
		function updateAccountofAgent($agentKey,$agentname,$username,$password,$agentphone,$district,$panchayath){
			
			$userId	=	$this -> loadKeyByValue("agents","user_id","agent_key",$agentKey);
			
			$usersTableUpdate	=	0;
			$agentTableUpdate	=	0;
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				
				$sql1 = "UPDATE users SET user_name='".$username."',password='".md5($password)."',name='".$agentname."'  WHERE id ='".$userId."'";
				
				
				if ($conn->query($sql1) === TRUE) {
					
				  $usersTableUpdate	=	1;
				  
				  $sql2 = "UPDATE agents SET agent_name ='".$agentname."',contact_number='".$agentphone."',district_key='".$district."', panchayat_key='".$panchayath."'  WHERE agent_key='".$agentKey."'";
				  
				  
				  
				  if ($conn->query($sql2) === TRUE)
						$agentTableUpdate	=	1;
				
				}
				
				
				
				if($usersTableUpdate==1 AND $agentTableUpdate==1){
				
					$return["msg"] 		=	"Your Profile Updated Successfully";
					$return["color"]	=	"green"; 
					$conn->close();
					return $return;
				}
				else{
					$return["msg"] 		=	"Not Able to Update Your Profile . Please contact Admin..";
					$return["color"]	=	"red"; 
					$conn->close();
					return $return;
				}
				
			}
			
			
		} 
		
		function updatePendingAgentAccount($agentKey,$agentname,$username,$password,$agentphone,$district,$panchayath){
			
			$userId	=	$this -> loadKeyByValue("agents","user_id","agent_key",$agentKey);
			
			$usersTableUpdate	=	0;
			$agentTableUpdate	=	0;
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				
				$sql1 = "UPDATE temp_users SET temp_name='".$agentname."',temp_user_name='".$username."',password='".md5($password)."',contact_number=".$agentphone.",district_key='".$district."',panchayat_key='".$panchayath."'  WHERE 	temp_user_key ='".$agentKey."'";
				
				if ($conn->query($sql1) === TRUE) {
					
					$return["msg"] 		=	"Agent Profile Updated Successfully";
					$return["color"]	=	"green"; 
					$conn->close();
					return $return;
				
				}else{
					
					$return["msg"] 		=	"Not Able to Update Agent Profile . Please contact Admin..";
					$return["color"]	=	"red"; 
					$conn->close();
					return $return;
					
				}
				
				
			}
			
			
		} 
		
		function markPopularDistrict($key,$popular){
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
				  die("Connection failed: " . $conn->connect_error);
				}
				else{
					
					$sql1 = "UPDATE districts SET  popular='".$popular."'WHERE district_key ='".$key."'";
						
					if ($conn->query($sql1) === TRUE) {
						return true;
					}
			
				}
		}
		
		
		function updateDistrict($key,$district){
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
				  die("Connection failed: " . $conn->connect_error);
				}
				else{
					
					$sql1 = "UPDATE districts SET  district_name='".$district."' WHERE district_key ='".$key."'";
						
					if ($conn->query($sql1) === TRUE) {
						
						$return["color"]	=	"green";
						$return["msg"]		=	"District Name updated Successfully...";
						$conn->close();
						return $return;
					
					}else{
						$return["color"]	=	"red";
						$return["msg"]		=	"Not able to update District Name";
						$conn->close();
						return $return;
					}
			
				}
		}
		
		function markPopularPanchayat($pKey,$popular='0'){
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
				  die("Connection failed: " . $conn->connect_error);
				}
				else{
					
					$sql1 = "UPDATE panchayaths SET  panchayath_popular='".$popular."' WHERE panchayath_key ='".$pKey."'";
						
					if ($conn->query($sql1) === TRUE) {
						
						return true;
					
					}
				}
		}
		
		function updatePanchayat($pKey,$pName){
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
				  die("Connection failed: " . $conn->connect_error);
				}
				else{
					
					$sql1 = "UPDATE panchayaths SET  panchayath_name='".$pName."' WHERE panchayath_key ='".$pKey."'";
						
					if ($conn->query($sql1) === TRUE) {
						
						$return["color"]	=	"green";
						$return["msg"]		=	"Panchayaths Name updated Successfully...";
						$conn->close();
						return $return;
					
					}else{
						$return["color"]	=	"red";
						$return["msg"]		=	"Not able to update Panchayath Name";
						$conn->close();
						return $return;
					}
			
				}
		}
		
		
		function loadAgentDetailsByUserKey55($agentKey){
			
			
			
			$details	=	 $this -> loadAgentDetailsByKey2($agentKey);
			return $details;
		}
		
		function loadAgentDetailsByUserKey4($userKey){
			
			$userId		=	 $this -> loadKeyByValue("users","id","user_key",$userKey);
			$agentKey	=	 $this -> loadKeyByValue("agents","agent_key","user_id",$userId);
			
			$details	=	 $this -> loadAgentDetailsByKey2($agentKey);
			return $details;
		}
		
		function loadAgentDetailsByUserKey($userKey){
			
			$userId		=	 $this -> loadKeyByValue("users","id","user_key",$userKey);
			$agentKey	=	 $this -> loadKeyByValue("agents","agent_key","user_id",$userId);
			
			$details	=	 $this -> loadAgentDetailsByKey($agentKey);
			return $details;
		}
		
		function loadAgentDetailsByUserKey3($userKey){
			
			$userId		=	 $this -> loadKeyByValue("users","id","user_key",$userKey);
			$agentKey	=	 $this -> loadKeyByValue("agents","agent_key","user_id",$userId);
			
			$details	=	 $this -> loadAgentDetailsByKey3($agentKey);
			return $details;
		}
		
		function loadAgentRecordKeyByUserKey($userKey){
			
			$recordKey	=	 $this -> loadKeyByValue("agent_records","record_key","user_key",$userKey);
			return $recordKey;
		}
		
	
		
		function loadAgentDetailsByAgentKey($agentKey){
			
			$agentDetails	=	array();
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql	=	"SELECT user_key FROM users INNER JOIN agents ON  users.id=agents.user_id  WHERE  agent_key='".$agentKey."' LIMIT 1";
				$result	=	$conn-> query($sql);
					
					if($result->num_rows>0){
					
						while($row = $result->fetch_assoc()){
							
							$agentDetails	=	$row;
							
						}
						
						return $agentDetails;
						
					}
					else
						return false;
				}
			
		}
		
		function NewloadAgentDetailsByUserKey($userKey){
			
			$agentDetails	=	array();
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql	=	"SELECT user_key FROM users INNER JOIN agents ON  users.id=agents.user_id  WHERE  user_key='".$userKey."' LIMIT 1";
				$result	=	$conn-> query($sql);
					
					if($result->num_rows>0){
					
						while($row = $result->fetch_assoc()){
							
							$agentDetails	=	$row;
							
						}
						
						return $agentDetails;
						
					}
					else
						return false;
				}
			
		}
		
		function loadAgentRecordKeyByAgentKey($agentKey){
			
			$agentDetails	=	array();
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$userId		=	 $this -> loadKeyByValue("agents","user_id","agent_key",$agentKey);
				
				$userKey	=	 $this -> loadKeyByValue("users","user_key","id",$userId);
				
				$recordKey	=	 $this -> loadKeyByValue("agent_records","record_key","user_key",$userKey);
				
				return $recordKey;
			}
		}
		
		
		
		function loadAgentAdharKeyByRecordKey($recordKey){
			
			$agentDetails	=	array();
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$adharKey	=	 $this -> loadKeyByValue("agent_records","agent_aadhar_key","record_key",$recordKey);
				return $adharKey;
			}
		}
		
		function loadAgentPhotoKeyByUserKey($userKey){
			
			$photoKey		=	 $this -> loadKeyByValue("agent_records","agent_photo_key","user_key",$userKey);
			
			return $photoKey;
		}
		
		function loadAgentAdharKeyByUserKey($userKey){
			
			$aadharKey		=	 $this -> loadKeyByValue("agent_records","agent_aadhar_key","user_key",$userKey);
			
			return $aadharKey;
		}
		
		function loadPendingAgentDetailsByKey($agent_Key){
			
			$agentDetails = array();
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
				
				if ($conn->connect_error) {
				  die("Connection failed: " . $conn->connect_error);
				}
				else{
				
					$sql="SELECT *  FROM temp_users WHERE temp_user_key='".$agent_Key."'LIMIT 1";
					
					
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
		
		function loadAgentDetailsByKey3($agent_Key){
			
			$agentDetails = array();
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
				
				if ($conn->connect_error) {
				  die("Connection failed: " . $conn->connect_error);
				}
				else{
				
					$sql="SELECT agent_key,users.user_key,users.user_name,agents.agent_name,agents.contact_number,users.user_name,district_key,panchayat_key  FROM agents INNER JOIN users ON  agents.user_id=users.id WHERE agents.agent_key='".$agent_Key."' LIMIT 1";
					
					
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
		
		function loadDistrictAgentDetailsByKey($agent_Key){
			
			$agentDetails = array();
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
				
				if ($conn->connect_error) {
				  die("Connection failed: " . $conn->connect_error);
				}
				else{
				
					$sql="SELECT agent_key,users.user_key,users.user_name,agents.agent_name,agents.contact_number,users.user_name,district_key  FROM agents INNER JOIN users ON  agents.user_id=users.id WHERE agents.agent_key='".$agent_Key."' LIMIT 1";
					
				
					$result	=	$conn-> query($sql);
					
					if($result->num_rows>0){
					
						while($row = $result->fetch_assoc()){
							
							$agentDetails	=	$row;
							
						}
					
					}
					
					
					
					$districts	=	$this -> loadAllDistricts();
					
					foreach($districts as $d){
						
						if($d["district_key"]==$agentDetails["district_key"])
							$agentDetails["district"]= $d["district_name"];
					}
					
					
					
					return $agentDetails;
				}
			
		}
		
		function loadAgentDetailsByKey($agent_Key){
			
			$agentDetails = array();
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
				
				if ($conn->connect_error) {
				  die("Connection failed: " . $conn->connect_error);
				}
				else{
				
					$sql="SELECT agent_key,users.user_key,users.user_name,agents.agent_name,agents.contact_number,users.user_name,district_key,panchayat_key  FROM agents INNER JOIN users ON  agents.user_id=users.id WHERE users.user_key='".$agent_Key."' LIMIT 1";
					
				
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
		
		function loadAgentDetailsByKey2($agent_Key){
			
			$agentDetails = array();
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
				
				if ($conn->connect_error) {
				  die("Connection failed: " . $conn->connect_error);
				}
				else{
				
					$sql="SELECT agent_key,users.user_key,agents.agent_name,agents.contact_number,users.user_name,district_key,panchayat_key  FROM agents INNER JOIN users ON  agents.user_id=users.id WHERE agents.agent_key='".$agent_Key."' LIMIT 1";
				
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
		
		function	loadPanchayathNameAndDistrictByPKey($pKey){
			
			$panchayathDetails	=	array();
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql	=	"SELECT panchayath_name,panchayath_key,district_id,district_name,districts.id as districtId,district_name FROM districts INNER JOIN panchayaths   ON districts.id=panchayaths.district_id";
				
			
				$result = 	$conn->query($sql);
				
				if($result->num_rows>0){
					
						while($row = $result->fetch_assoc()){
							
							$panchayathDetails	=	$row;
							
						}
				 $conn->close();
				 return $panchayathDetails;
				}
				
			}
		}
		
		function postProperty($clientname,$clientnumber,$propertyname,$propertyfor,$propertyprice,$propertyarea,$district,$panchayat,$bedrooms,$bathrooms,$floor,$parking,$description,$map=0,$status='0'){
		
			$propertyKey	=	null;
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				if(isset($_SESSION['user_key'])) {
				
					$propertyKey	=	generateUniqueKey2("properties","property_key");
					$userId 		= 	$this -> loadKeyByValue("users","id","user_key",$_SESSION['user_key']);
				
					$sql = "INSERT INTO properties (Client_Name,Client_Number,property_key,user_id,property_for,property_name,property_price,property_area,property_district,property_panchayat,property_bedroom,property_bathroom,property_floor,property_parking,property_description,property_map,property_status) VALUES ('".$clientname."','".$clientnumber."','".$propertyKey."', '".$userId."','".$propertyfor."','".$propertyname."','".$propertyprice."','".$propertyarea."','".$district."','".$panchayat."','".$bedrooms."','".$bathrooms."','".$floor."','".$parking."','".$description."','".$map."','".$status."')";
					
					if ($conn->query($sql) === TRUE) {
						$details	=	array();
										
						$propertyId 	= $this -> loadKeyByValue("properties","id","property_key ",$propertyKey);
						$userId 		= $this -> loadKeyByValue("users","id","user_key",$_SESSION['user_key']);
						
						$sql22	=	"SELECT number_of_active_properties,number_of_inactive_properties FROM agents WHERE user_id=".$userId." LIMIT 1";
								
						$result22 = 	$conn->query($sql22);
						if ($result22->num_rows > 0) {
							while($row = $result22->fetch_assoc()){
								
								$details	=	$row;
								
							}
							
							
							$newInActivePropertyCount	=	$details["number_of_inactive_properties"]+1;
								
							$sql33 = "UPDATE  agents SET number_of_inactive_properties=".$newInActivePropertyCount."  WHERE user_id='".$userId."'";
							
							
							
							if ($conn->query($sql33) === TRUE){
								
								$return['propertyKey']=	$propertyKey;
								$return['userId']=	$userId;
								$return['propertyId']=	$propertyId;				
								$return['status']	=	"true"; 
								$return['color']	=	"green"; 
								$return['msg']		=	"Your Property Posted Successfully . It will be listed soon after verification..";
								$conn->close();
								return $return;
								
							}else{
								
								$return['propertyKey']=	$propertyKey;
								$return['userId']=	$userId;
								$return['propertyId']=	$propertyId;				
								$return['status']	=	"false"; 
								$return['color']	=	"red"; 
								$return['msg']		=	"Error in update agent table while posting a property..";
								$conn->close();
								return $return;
							}
								
						}

						
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
		
			
		function updateProperty($property_key,$clientname,$clientnumber,$propertyname,$propertyfor,$propertyprice,$propertyarea,$bedrooms,$bathrooms,$floor,$parking,$description,$map=0,$status='0'){
		
						
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				if(isset($property_key)) {
				
									
					$sql = "UPDATE  properties SET Client_Name='".$clientname."',Client_Number='".$clientnumber."',property_for='".$propertyfor."',property_name='".$propertyname."',property_price='".$propertyprice."',property_area='".$propertyarea."',property_bedroom='".$bedrooms."',property_bathroom='".$bathrooms."',property_floor='".$floor."',property_parking='".$parking."',property_description='".$description."',property_map='".$map."',property_status='".$status."'  WHERE property_key='".$property_key."'";
					
					
					if ($conn->query($sql) === TRUE) {
						
											
						$propertyId = $this -> loadKeyByValue("properties","id","property_key ",$property_key);
						$userId 	= $this -> loadKeyByValue("properties","user_id","property_key",$property_key);
						
						
						
						$return['propertyKey']	=	$property_key;
						$return['userId']		=	$userId;
						$return['propertyId']	=	$propertyId;				
						$return['status']		=	"true"; 
						$return['color']		=	"green"; 
						$return['msg']			=	"Your Property Posted Successfully . It will be listed soon after verification..";
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
		
		function loadPropertiesByDistrictWise($dKey){
			
			$propertyDetails			=	array();
			$propertyDistrictDetails	=	array();
			$propertyFullDetails			=	array();
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql	=	"SELECT users.id as userid,property_name,name,property_for,property_key,property_district,property_panchayat,property_image,image_name,property_price,property_bedroom,property_bathroom,property_floor,property_parking,property_description  FROM users INNER JOIN properties ON users.id = properties.user_id WHERE properties.property_district='".$dKey."' AND properties.property_status='1'";
				
				//echo $sql;
				
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
		
		function loadPropertiesByStatus($status){
			
			$propertyDetails			=	array();
			$propertyDistrictDetails	=	array();
			$propertyFullDetails			=	array();
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql	=	"SELECT users.id as userid,users.user_key as userkey,property_name,name,property_for,property_key,property_district,property_panchayat,property_image,image_name,property_price,property_bedroom,property_bathroom,property_floor,property_parking,property_description  FROM users INNER JOIN properties ON users.id = properties.user_id WHERE properties.property_status='".$status."'";
				
				
				
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
		
		
			function loadPropertiesByDistrictForDistrictExecutiveByStatus($district,$status){
			
			$propertyDetails			=	array();
			$propertyDistrictDetails	=	array();
			$propertyFullDetails			=	array();
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql	=	"SELECT users.id as userid,property_name,name,property_key,property_district,property_panchayat,property_image,image_name,property_price,property_bedroom,property_bathroom,property_floor,property_parking,property_description,properties.property_status  FROM users INNER JOIN properties ON users.id = properties.user_id WHERE properties.property_district ='".$district."' AND properties.property_status='".$status."'";
				
			
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
		
		function loadPropertiesByDistrictAndPanchathByStatus($district,$panchayath,$status){
			
			$propertyDetails			=	array();
			$propertyDistrictDetails	=	array();
			$propertyFullDetails			=	array();
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql	=	"SELECT users.id as userid,property_name,name,property_key,property_district,property_panchayat,property_image,image_name,property_price,property_bedroom,property_bathroom,property_floor,property_parking,property_description,properties.property_status  FROM users INNER JOIN properties ON users.id = properties.user_id WHERE properties.property_district ='".$district."' AND properties.property_panchayat='".$panchayath."' AND properties.property_status='".$status."'";
				
			
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
		
		function updateAgentRecordTable($image_Key,$user_Key,$propertyId,$imageName,$imageExtension,$propertyKey,$imageType,$status='1'){
			
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
							$result['color']	=	"green";
							$conn->close();
							return $result;
						
						}
							
				} else {
						  
						  $result['msg']		=	$conn->error;
						  $result['color']		=	"green";
						  $conn->close();
						  return $result;
				}
				
			}
		}
		
		function updateEditImageTable($pKey,$imageKey,$file_name,$file_type,$status='1'){
			
			
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql1 = "UPDATE   propertyimages SET img_name='".$file_name."', img_extension='".$file_type."' WHERE img_key='".$imageKey."'";
						
				//echo "<br> updateEditImageTable SQL   :".$updateEditImageTable;
				
				if ($conn->query($sql1) === TRUE) {
					
					if($status=='1'){
						
						$sql1 = "UPDATE properties SET property_image='".$imageKey."',image_name='".$file_name."'  WHERE property_key ='".$pKey."'";
						
						if ($conn->query($sql1) === TRUE) {
								
								return true;
							
						}
						
					}
					
					if($status=='2'){
						
						$sql2 = "UPDATE properties SET image2='".$imageKey."',image_name2='".$file_name."'  WHERE property_key ='".$pKey."'";
						
						if ($conn->query($sql2) === TRUE) {
								
								return true;
							
						}
						
					}
					
					if($status=='3'){
						
						$sql3 = "UPDATE properties SET image3='".$imageKey."',image_name3='".$file_name."'  WHERE property_key ='".$pKey."'";
						
						if ($conn->query($sql3) === TRUE) {
								
								return true;
							
						}
						
					}
					
					if($status=='4'){
						
						$sql4 = "UPDATE properties SET image4='".$imageKey."',image_name4='".$file_name."'  WHERE property_key ='".$pKey."'";
						
						if ($conn->query($sql4) === TRUE) {
								
								return true;
							
						}
						
					}
				} 
				
			}
			
		}
		
		function updateImageTableAdmin($imageKey,$userId,$propertyId,$imageName,$imageExtension,$propertyKey,$imageType,$img_order,$status='1'){
			
			
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql = "INSERT INTO propertyimages (img_key ,property_id,user_id,img_name,img_extension,img_folder_key,img_type,img_order,img_status) VALUES ('".$imageKey."','".$propertyId."','".$userId."','".$imageName."','".$imageExtension."','".$propertyKey."','".$imageType."','".$img_order."','".$status."')";
				
				echo "<br> SQL 1:".$sql;;		
				
				if ($conn->query($sql) === TRUE) {
					
					if($img_order=='1'){
						
						$sql1 = "UPDATE properties SET property_image='".$imageKey."',image_name='".$imageName."' WHERE property_key ='".$propertyKey."'";
					//	echo "<br>  SQL1   :".$sql1;
						if ($conn->query($sql1) === TRUE) {
								
								return true;
							
						}
						
					}
					
					if($img_order=='2'){
						
						$sql2 = "UPDATE properties SET image2='".$imageKey."',image_name2='".$imageName."' WHERE property_key ='".$propertyKey."'";
					//	echo "<br>  SQL2   :".$sql2;
						if ($conn->query($sql2) === TRUE) {
								
								return true;
							
						}
						
					}
					
					if($img_order=='3'){
						
						$sql3 = "UPDATE properties SET image3='".$imageKey."',image_name3='".$imageName."' WHERE property_key ='".$propertyKey."'";
					//	echo "<br>  SQL3   :".$sql3;
						if ($conn->query($sql3) === TRUE) {
								
								return true;
							
						}
						
					}
					
					if($img_order=='4'){
						
						$sql4 = "UPDATE properties SET image4='".$imageKey."',image_name4='".$imageName."'  WHERE property_key ='".$propertyKey."'";
					//	echo "<br>  SQL4   :".$sql4;
						if ($conn->query($sql4) === TRUE) {
								
								return true;
							
						}
					}
				}
			}
		}
		
		function loadOldFileNameByUserKey($userKey){
			
			$oldFileNames	=	array();
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql	=	"SELECT id,agent_photo_name,agent_aadhar_name  FROM agent_records WHERE user_key='".$userKey."' LIMIT 1";
				
			
				$result = 	$conn->query($sql);
				
				if($result->num_rows>0){
					
						while($row = $result->fetch_assoc()){
							
							$oldFileNames	=	$row;
							
						}
				 $conn->close();
				 return $oldFileNames;
				}
				
			}
		}
		
		function updateRecordTableWithImage($userKey,$imageName,$imageType){
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql = "UPDATE agent_records SET agent_photo_name='".$imageName."',agent_photo_type='".$imageType."' WHERE user_key   ='".$userKey."'";
						
						if ($conn->query($sql) === TRUE) {
							
							$result['status']	=	"true"; 
							$result['msg']		=	"Image Uploaded ..";
							$result['color']	=	"green";
							$conn->close();
							return $result;
						
						}
							
				 else {
						  
						  $result['msg']		=	$conn->error;
						  $result['color']		=	"green";
						  $conn->close();
						  return $result;
				}
				
			}
		}
		
		function updateRecordTableWithAadhar($userKey,$adharName,$adharType){
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql = "UPDATE agent_records SET agent_aadhar_name='".$adharName."',agent_adher_type='".$adharType."' WHERE user_key   ='".$userKey."'";
						
						if ($conn->query($sql) === TRUE) {
							
							$result['status']	=	"true"; 
							$result['msg']		=	"Image Uploaded ..";
							$result['color']	=	"green";
							$conn->close();
							return $result;
						
						} else {
						  
						  $result['msg']		=	$conn->error;
						  $result['color']		=	"green";
						  $conn->close();
						  return $result;
				}
				
			}
		}
		
		function updateImageTable2($img_key,$userId,$propertyId,$imageName,$imageExtension,$propertyKey,$imageType,$img_order,$status='1'){
			
			$imageKey	=	null;
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql = "INSERT INTO propertyimages (img_key ,property_id,user_id,img_name,img_extension,img_folder_key,img_type,img_order,img_status) VALUES ('".$img_key."','".$propertyId."','".$userId."','".$imageName."','".$imageExtension."','".$propertyKey."','".$imageType."','".$img_order."','".$status."')";
						
				
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
		
		function updateImageTable3($img_key,$userId,$propertyId,$imageName,$imageExtension,$propertyKey,$imageType,$img_order,$status='1'){
			
			$imageKey	=	null;
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql = "INSERT INTO propertyimages (img_key ,property_id,user_id,img_name,img_extension,img_folder_key,img_type,img_order,img_status) VALUES ('".$img_key."','".$propertyId."','".$userId."','".$imageName."','".$imageExtension."','".$propertyKey."','".$imageType."','".$img_order."','".$status."')";
						
				
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
		
		function loadPropertyImageKeysWithoutSortingByPropertyKey($pkey){
			
			
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql	=	"SELECT *  FROM propertyimages WHERE img_folder_key='".$pkey."' ORDER BY img_order";
				
				$result = 	$conn->query($sql);
				
				if($result->num_rows>0){
					
						while($row = $result->fetch_assoc()){
							
							$oldFileNames[]	=	$row;
							
						}
				 
				}
				
				//echo "<br> oldFileNames";
				//op($oldFileNames);
				
				$FinalResult = array();
				
				foreach($oldFileNames as $file){
					
					$FinalResult[$file["img_order"]-1] = $file;
				}
				
				//echo "<br> After Order Sorting";
				//op($FinalResult);
				
				for($i=0;$i<4;$i++){
					
					if(!isset($FinalResult[$i])){
						
						$FinalResult[$i]=array();
						
					}
				}
				
				//echo "<br> ARRAY :------";
			//	op($FinalResult);
								
				$conn->close();
				return $FinalResult;
			}
			
			
		}
		
		function loadPropertyImageKeysByPropertyKey($pkey){
			
			$userId	=	$this -> loadKeyByValue("properties","user_id","property_key",$pkey);
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql	=	"SELECT *  FROM propertyimages WHERE user_id='".$userId."'";
				
				$result = 	$conn->query($sql);
				
				if($result->num_rows>0){
					
						while($row = $result->fetch_assoc()){
							
							$oldFileNames[]	=	$row;
							
						}
				 $conn->close();
				 return $oldFileNames;
				}
				
			}
			
			
		}
		
		function updateImageTable4($img_key,$userId,$propertyId,$imageName,$imageExtension,$propertyKey,$imageType,$img_order,$status='1'){
			
			$imageKey	=	null;
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql = "INSERT INTO propertyimages (img_key ,property_id,user_id,img_name,img_extension,img_folder_key,img_type,img_order,img_status) VALUES ('".$img_key."','".$propertyId."','".$userId."','".$imageName."','".$imageExtension."','".$propertyKey."','".$imageType."','".$img_order."','".$status."')";
						
				
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
		
		function loadAgentRecordsByUserKey($userKey){
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			$recordDetails	=	 array();
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql	=	"SELECT users.id,users.user_key as userKey,record_key,agent_photo_key,agent_photo_name,agent_aadhar_key,agent_aadhar_name FROM users INNER JOIN agent_records ON users.user_key=agent_records.user_key WHERE agent_records.user_key ='".$userKey."' LIMIT 1";
				
			
				
				$result = 	$conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc())
						$recordDetails = $row;
					
				return $recordDetails;
				}else
					return false;
			}
		}
		
	/* 	
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
		} */
		
		 function changePropertyStatus($propertyKey,$status){
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql = "UPDATE properties SET property_status ='".$status."' WHERE property_key ='".$propertyKey."'";
				
				if ($conn->query($sql) === TRUE) {
					
					$userId					=	$this -> loadKeyByValue("properties","user_id","property_key",$propertyKey);
					

					$oldActiveropertyCount	=	$this -> loadKeyByValue("agents","number_of_active_properties","user_id",$userId);
					$oldInActiveropertyCount=	$this -> loadKeyByValue("agents","number_of_inactive_properties","user_id",$userId);
					$newActiveropertyCount	=	0;
					$newInActiveropertyCount=	0;
					
					if($status=='1') {
						
						$newActiveropertyCount	=	$oldActiveropertyCount+1;
						$newInActiveropertyCount=	$oldInActiveropertyCount-1;
						
					}else if($status=='0'){
						
						$newActiveropertyCount	=	$oldActiveropertyCount-1;
						$newInActiveropertyCount=	$oldInActiveropertyCount+1;
						
					}
					
					$sql2 = "UPDATE agents SET number_of_active_properties ='".$newActiveropertyCount."',number_of_inactive_properties='".$newInActiveropertyCount."' WHERE user_id ='".$userId."'";
					
					if ($conn->query($sql2) === TRUE) {
						$conn->close();
						return true;
						
					}else {
						  $conn->close();
						  return false;
					}
						  
				} else {
					$conn->close();
				  return false;
				}
			}
		}
		 
		/* function changePropertyStatus($propertyKey,$status){
			
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
		} */
		
		function loadPropertyDetailsByKey($property_Key){
			
			$propertyDetails			=	array();
			$propertyDistrictDetails	=	array();
			$propertyFullDetails			=	array();
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql	=	"SELECT users.id as userid,users.user_key as userkey,Client_Name,Client_Number,properties.property_for,property_name,name,property_key,property_district,property_panchayat,property_image,image2,image3,image4,image_name,image_name2,image_name3,image_name4,property_price,property_bedroom,property_bathroom,property_floor,property_parking,property_description,property_area  FROM users INNER JOIN properties ON users.id = properties.user_id WHERE properties.property_key ='".$property_Key."' LIMIT 1";
				
				
				
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
			
			$agentDetails	=	$this -> loadAgentDetailsByKey2($agentKey);
			if($agentDetails){
				
				
				return $agentDetails;
				
			}
			else{
				
				$return["status"]="false";
				$return["color"]="red";
				return $return;
				
			}
			
		}
		
		function loadAgentPhotoKeyByRecordKey($recordKey){
			
			$photoKey		=	$this -> loadKeyByValue("agent_records","agent_photo_key","record_key",$recordKey);
			return $photoKey;
		}
		
		function loadPointsByUserKey($Key){
		
			$totalPoint	= 0;
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql	=	"SELECT total_point FROM points INNER JOIN users ON points.user_id = users.id WHERE user_key ='".$Key."' LIMIT 1";
				
				$result = 	$conn->query($sql);
				if ($result->num_rows > 0) { 
					while($row = $result->fetch_assoc())
						$totalPoint = $row["total_point"];
					
				return $totalPoint;
				}else{
					
					return 0;
				}
			}

		
		}
		
		function loadPointsByAgentKey($Key){
		
			$totalPoint	= 0;
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$userId = $this -> loadKeyByValue("agents","user_id","agent_key",$Key);
				
				$sql	=	"SELECT total_point FROM points INNER JOIN users ON points.user_id = users.id WHERE users.id ='".$userId."' LIMIT 1";
				
				$result = 	$conn->query($sql);
				if ($result->num_rows > 0) { 
					while($row = $result->fetch_assoc())
						$totalPoint = $row["total_point"];
					
				return $totalPoint;
				}else{
					
					return 0;
				}
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
				
				$sql	=	"SELECT users.id as userid,property_name,name,property_for,property_key,property_district,property_panchayat,property_image,image_name,property_price,property_bedroom,property_bathroom,property_floor,property_parking,property_area,property_description  FROM users INNER JOIN properties ON users.id = properties.user_id WHERE property_district='".$dKey."' AND  property_panchayat='".$pKey."' AND property_key!='".$propertyKey."' AND properties.property_status='1'";
				
				
				
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
				
				$sql	=	"SELECT users.id as userid,Client_Name,Client_Number,property_name,name,property_key,property_district,property_panchayat,property_image,image_name,property_price,property_bedroom,property_bathroom,property_floor,property_parking,property_description,properties.property_status  FROM users INNER JOIN properties ON users.id = properties.user_id WHERE users.user_key  ='".$agentKey."'";
				
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
		
		function deleteAgent($ukey,$akey){
			
			$propertyDetails	=	array();
			$propertyKey		=	null;
			$propertyId			=	null;
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$userId	=	$this -> loadKeyByValue("users","id","user_key",$ukey);
				
				$sql="DELETE FROM users WHERE user_key ='".$ukey."'";
				$result = 	$conn->query($sql);
				if ($result) {
				
					$sql2="DELETE FROM agents WHERE agent_key ='".$akey."'";
					$result2 = 	$conn->query($sql2);
					if ($result2){
						
						$sql3	=	"DELETE FROM properties WHERE user_id='".$userId."'";
						$result3 = 	$conn->query($sql3);
						if ($result3) {
							
							$sql4	=	"DELETE FROM properties WHERE user_id='".$userId."'";
							$result4 = 	$conn->query($sql4);
							if ($result4){
								
								$sql5	=	"DELETE FROM propertyimages WHERE user_id='".$userId."'";
								$result5 = 	$conn->query($sql5);
								if ($result5){
									
									$sql6	=	"DELETE FROM points WHERE user_id='".$userId."'";
									$result6 = 	$conn->query($sql6);
									if ($result6){
										
										$sql7	=	"DELETE FROM point_history WHERE user_id='".$userId."'";
										$result7 = 	$conn->query($sql7);
										if ($result7){
											
											
											$record_key		=	$this -> loadKeyByValue("agent_records","record_key","user_key",$ukey);
											
											$agent_photo_key=	$this -> loadKeyByValue("agent_records","agent_photo_key","user_key",$ukey);
											$agent_photo_name=	$this -> loadKeyByValue("agent_records","agent_photo_name","user_key",$ukey);
											
											$agent_aadhar_key=	$this -> loadKeyByValue("agent_records","agent_aadhar_key","user_key",$ukey);
											$agent_aadhar_name=	$this -> loadKeyByValue("agent_records","agent_aadhar_name","user_key",$ukey);
											
											$path1   = "cards/".$ukey."/".$record_key."/".$agent_photo_key."/".$agent_photo_name;
											$folder1 = "cards/".$ukey."/".$record_key."/".$agent_photo_key;
											
											$path2   = "cards/".$ukey."/".$record_key."/".$agent_aadhar_key."/".$agent_aadhar_name;
											$folder2 = "cards/".$ukey."/".$record_key."/".$agent_aadhar_key;
											
											$folder3 = "cards/".$ukey."/".$record_key;
											$folder4 = "cards/".$ukey;
											
											if(is_file($path1)){
												unlink($path1);
											}
											if(!rmdir($folder1)) {
											  echo ("Could not remove ".$folder1);
											}
											if(is_file($path2)){
												unlink($path2);
											}
											if(!rmdir($folder2)) {
											  echo ("Could not remove ".$folder2);
											}
											if(!rmdir($folder3)) {
											  echo ("Could not remove ".$folder2);
											}
											if(!rmdir($folder4)) {
											  echo ("Could not remove ".$folder2);
											}
											
											$sql8	=	"DELETE FROM agent_records WHERE user_key='".$ukey."'";
											$result8 = 	$conn->query($sql8);
											if ($result8){
												
												$sql9	=	"DELETE FROM profile_payments WHERE user_id='".$userId."'";
												$result9 = 	$conn->query($sql9);
												if ($result9){
													
													$sql10	=	"DELETE FROM points WHERE user_id='".$userId."'";
													$result10 = 	$conn->query($sql10);
													if ($result10){
														
														$return["color"]	=	"green";
														$return["msg"]		=	"Agent Account Deleted Successfully...";
														$conn->close();
														return $return;
														
													}else
														return false;
												}else
														return false;
													
											}else
												return false;
										}else
											return false;
									}
									else
										return false;
									
								}else
									return false;
							}else
									return false;
						}else{
							return false;
						}
						
						
					}
					else{
						
						return false;
						
					}
					
						
				}else{
					
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
		
		function loadPointHistoryByUserKey($userKey){
			
			$pointHistory	=	array();
			
			$userId	=	$this -> loadKeyByValue("users","id","user_key",$userKey);
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql	=	"SELECT point_history_key,point_id,point,point_label FROM point_history WHERE user_id ='".$userId."' ";
				
				$result = 	$conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc())
						$pointHistory[] = $row;
					
				return $pointHistory;
				}else
					return false;
			}
			
			
		}
		
		function insertPoint($userId,$point,$label){
			
			$Oldpoint=0;
			$pointId = 0;
			$pointKey	=	generateUniqueKey2('points','point_key');
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				
				
				
				$sql	=	"SELECT total_point,id as pointid FROM points WHERE user_id ='".$userId."' LIMIT 1";
				
				
				
				$result = 	$conn->query($sql);
				if ($result->num_rows > 0) {
					while($row = $result->fetch_assoc()){
						$Oldpoint	=	$row["total_point"];
						$pointId	=	$row["pointid"];
						
						
						
					}	
				}else{
					
					$sql2	=	"INSERT INTO points (point_key,user_id,total_point,point_status) VALUES ( '".$pointKey."','".$userId."','0','1' )";
					$resul2 = 	$conn->query($sql2);
				
					
					
				}
				
				$sql3 = "UPDATE points SET total_point='".($Oldpoint+$point)."'  WHERE user_id ='".$userId."'";
				
				
				
				if ($conn->query($sql3) === TRUE){
						
						
						$pointId	=	$this -> loadKeyByValue("points","id","point_key",$pointKey);
						
						$sq4	=	"INSERT INTO point_history(point_history_key,user_id,point_id,point,point_label,status) VALUES ( '".generateUniqueKey2('point_history','point_history_key')."','".$userId."','".$pointId."','".$point."','".$label."','1' )";
						
						
					
						$result4 = 	$conn->query($sq4);
						if($result4){
							
							$conn->close();
							$total = $Oldpoint+$point;
							
							return ($total);													
						}else{
							
							return 0;
						}
				}
				
			}
		}
		
		function updateImageTable($img_key,$userId,$propertyId,$imageName,$imageExtension,$propertyKey,$img_type,$img_order,$status='1'){
			
			$imageKey	=	null;
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql = "INSERT INTO propertyimages (img_key ,property_id,user_id,img_name,img_extension,img_folder_key,img_type,img_order,img_status) VALUES ('".$img_key."','".$propertyId."','".$userId."','".$imageName."','".$imageExtension."','".$propertyKey."','".$img_type."','".$img_order."','".$status."')";
				
				//echo "<br>  SQL 1  :".$sql;				
				
			//	echo "<br> Before IF";
				
				if ($conn->query($sql) === TRUE) {
				
					$sql2 = "UPDATE properties SET property_image='".$img_key."',image_name='".$imageName."'  WHERE id  ='".$propertyId."'";
						
						if ($conn->query($sql2) === TRUE) {
							//echo "<br> Inside  IF  After Update";	
							$result['status']	=	"true"; 
							$result['msg']		=	"Image Uploaded ..";
							$result['color']	=	"green";
							$conn->close();
							return $result;
						
						}
							
				} else {
						  
						  $result['msg']		=	$conn->error;
						  $result['color']		=	"green";
						  $conn->close();
						  return $result;
				}
				
			}
		}
		
		
		function loadPropertiesByUserKey($uKey){
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$userId = $this -> loadKeyByValue("users","id","user_key",$uKey);
				$details = array();
				$sql	=	"SELECT property_key,property_for,property_name,property_price FROM properties WHERE user_id ='".$userId."' AND property_status='1'";
				
				$result = 	$conn->query($sql);
				if ($result->num_rows > 0) { 
					while($row = $result->fetch_assoc())
						$details[] = $row;
					
				$conn->close();
				return $details;
				
				}else{
					$conn->close();
					return false;
				}
			}

			
		}
		
		function loadAllPropertiesByUserKey($uKey){
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$userId = $this -> loadKeyByValue("users","id","user_key",$uKey);
				$details = array();
				$sql	=	"SELECT property_key,property_for,property_name,property_price,property_status FROM properties WHERE user_id ='".$userId."'";
				
				$result = 	$conn->query($sql);
				if ($result->num_rows > 0) { 
					while($row = $result->fetch_assoc())
						$details[] = $row;
					
				$conn->close();
				return $details;
				
				}else{
					$conn->close();
					return false;
				}
			}

			
		}
		
		function updatePropertyCountinAgentTable($userKey,$status){
			
		$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{	
				$details= array();
				$userId 		= $this -> loadKeyByValue("users","id","user_key",$userKey);
				
				$sql22	=	"SELECT number_of_active_properties,number_of_inactive_properties FROM agents WHERE user_id=".$userId." LIMIT 1";
									
				$result22 = 	$conn->query($sql22);
				if ($result22->num_rows > 0) { 
					while($row = $result22->fetch_assoc())
					$details = $row;
				
				if($status=='1'){
					$number_of_active_properties=($details["number_of_active_properties"]-1);
					$sql30 = "UPDATE agents SET number_of_active_properties=".$number_of_active_properties." WHERE user_id='".$userId."'";
						
				}else if ($status=='0'){
					$number_of_inactive_properties=($details["number_of_inactive_properties"]-1);
					$sql30 = "UPDATE agents SET number_of_inactive_properties=".$number_of_inactive_properties." WHERE user_id='".$userId."'";
					
				}
				
				if ($conn->query($sql30) === TRUE) {
							
							$conn->close();
							return true;
						
				}else
					return false;
					
				$conn->close();
				return $details;
					
				}else{
					$conn->close();
					return false;
				}
			}
		}
		
		function checkReadyToDelete($akey){
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				$details = array();
				
				$sql	=	"SELECT number_of_active_properties,number_of_inactive_properties FROM agents WHERE agent_key ='".$akey."' LIMIT 1";
				
				$result = 	$conn->query($sql);
				if ($result->num_rows > 0) { 
					while($row = $result->fetch_assoc())
						$details = $row;
				
				if($details["number_of_active_properties"]>0 OR $details["number_of_inactive_properties"]>0){
					$conn->close();
					return false;
				}else{
					$conn->close();
					return true;
				}				
				
				
				return $details;
				
				}else{
					
					return false;
				}
			}
		}
	}

?>