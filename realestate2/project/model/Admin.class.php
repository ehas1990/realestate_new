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
				$sql	=	"SELECT users.id as userid,users.user_key,user_name,agent_key,agent_name,contact_number,balance_amount,district_key,panchayat_key,users.status,users.user_type,agents.number_of_active_properties,agents.number_of_inactive_properties  FROM users INNER JOIN agents ON users.id=agents.user_id WHERE users.user_type='5'";
				
				
				$result = 	$conn->query($sql);
				if ($result->num_rows > 0) {
					
					$districts	=	$this -> loadAllDistricts();
					$panchayaths	=	$this -> loadAllPanchayaths();
					
					
					
					while($row = $result->fetch_assoc()){

						if($row["number_of_active_properties"]>0 OR $row["number_of_inactive_properties"]>0)
							$row["readyToDelete"]=1;
						else
							$row["readyToDelete"]=0;
						$agentDetails[]=$row;
					}
					
					
					
					foreach($agentDetails as $agent){
						
						foreach($districts as $district){
						
							if($agent['district_key'] == $district['district_key'])
								$agent['district']	=	$district['district_name'];
							
						
						}
						$agentDistrictDetails[]	=	$agent;
					}
					
					$idArray=array();
					foreach($agentDistrictDetails as $agent){
						
						foreach($panchayaths as $panchayath){
						
							if($agent['panchayat_key'] == $panchayath['panchayath_key'])
								$agent['panchayath']	=	$panchayath['panchayath_name'];
							
						
						}
						$idArray[]			=	$agent["userid"];
						$allAgentDetails[]	=	$agent;
					}
					
				//	op($idArray);
					//op($allAgentDetails);exit;
					
					$conn->close();
				    return $allAgentDetails;
				  }
				  else{
					$conn->close();
					return false;
				  }
					  
				}
			
			
		}
		
		
		function loadAllAgentsByPanchayath($pKey){
			
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
				$sql	=	"SELECT users.user_key,agent_key,agent_name,contact_number,district_key,panchayat_key,users.status,users.user_type  FROM users INNER JOIN agents ON users.id=agents.user_id WHERE users.user_type='5' AND agents.panchayat_key='".$pKey."'";
				
				
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
					return false;
				  }
					  
				}
			
			
		}
		
		function loadAllDistrictExecutives(){
			
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
				$sql	=	"SELECT users.user_key,agent_key,agent_name,contact_number,district_key,panchayat_key,users.status,users.user_type  FROM users INNER JOIN agents ON users.id=agents.user_id WHERE users.user_type='9'";
				
				
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
				    return false;
				  }
					  
				}
			
			
		}
		
		function loadAllExecutives(){
			
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
				$sql	=	"SELECT users.user_key,agent_key,agent_name,contact_number,district_key,panchayat_key,users.status,users.user_type  FROM users INNER JOIN agents ON users.id=agents.user_id WHERE users.user_type='8'";
				
				
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
				    return false;
				  }
					  
				}
			
			
		}
		
		
		
		function loadNewAgentsByDistrict($dKey){
			
			$users				=	array();
			$districtDetails	=	array();
			$allDetails			=	array();
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
					
				$sql	=	"SELECT temp_user_key,temp_user_name,temp_name,plan_id,contact_number,district_key,panchayat_key,temp_status FROM temp_users WHERE district_key='".$dKey."'";
				
				$result = 	$conn->query($sql);
				
				if ($result->num_rows > 0) {
					
					$districts	=	$this -> loadAllDistricts();
					$panchayaths	=	$this -> loadAllPanchayaths();
					
					while($row = $result->fetch_assoc()){
												
						$users[]=$row;
					}
					
					foreach($users as $user){
						
						foreach($districts as $district){
						
							if($user['district_key'] == $district['district_key'])
								$user['district']	=	$district['district_name'];
							
						
						}
						$districtDetails[]	=	$user;
					}
					
					
					foreach($districtDetails as $details){
						
						foreach($panchayaths as $panchayath){
						
							if($details['panchayat_key'] == $panchayath['panchayath_key'])
								$details['panchayath']	=	$panchayath['panchayath_name'];
							
						
						}
						$allDetails[]	=	$details;
					}
					$conn->close();
				    return $allDetails;
				  }
				  else{
					$conn->close();
					return false;
				  }
					  
				}
			
		}
		
		function loadNewAgentsByPanchayath($pKey){
			
			$users				=	array();
			$districtDetails	=	array();
			$allDetails			=	array();
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
					
				$sql	=	"SELECT temp_user_key,temp_user_name,temp_name,plan_id,contact_number,district_key,panchayat_key,temp_status FROM temp_users WHERE panchayat_key='".$pKey."'";
				
				$result = 	$conn->query($sql);
				
				if ($result->num_rows > 0) {
					
					$districts	=	$this -> loadAllDistricts();
					$panchayaths	=	$this -> loadAllPanchayaths();
					
					while($row = $result->fetch_assoc()){
												
						$users[]=$row;
					}
					
					foreach($users as $user){
						
						foreach($districts as $district){
						
							if($user['district_key'] == $district['district_key'])
								$user['district']	=	$district['district_name'];
							
						
						}
						$districtDetails[]	=	$user;
					}
					
					
					foreach($districtDetails as $details){
						
						foreach($panchayaths as $panchayath){
						
							if($details['panchayat_key'] == $panchayath['panchayath_key'])
								$details['panchayath']	=	$panchayath['panchayath_name'];
							
						
						}
						$allDetails[]	=	$details;
					}
					$conn->close();
				    return $allDetails;
				  }
				  else{
					$conn->close();
					return false;
				  }
					  
				}
			
		}
		
		function loadNewAgents(){
			
			$users				=	array();
			$districtDetails	=	array();
			$allDetails			=	array();
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
					
				$sql	=	"SELECT temp_user_key,temp_user_name,temp_name,plan_id,contact_number,district_key,panchayat_key,temp_status FROM temp_users WHERE temp_user_type='5'";
				
				$result = 	$conn->query($sql);
				
				if ($result->num_rows > 0) {
					
					$districts	=	$this -> loadAllDistricts();
					$panchayaths	=	$this -> loadAllPanchayaths();
					
					while($row = $result->fetch_assoc()){
												
						$users[]=$row;
					}
					
					foreach($users as $user){
						
						foreach($districts as $district){
						
							if($user['district_key'] == $district['district_key'])
								$user['district']	=	$district['district_name'];
							
						
						}
						$districtDetails[]	=	$user;
					}
					
					
					foreach($districtDetails as $details){
						
						foreach($panchayaths as $panchayath){
						
							if($details['panchayat_key'] == $panchayath['panchayath_key'])
								$details['panchayath']	=	$panchayath['panchayath_name'];
							
						
						}
						$allDetails[]	=	$details;
					}
					$conn->close();
				    return $allDetails;
				  }
				  else{
					$conn->close();
					return false;
				  }
					  
				}
			
		}
		
		function loadPlanPriceByKey($planKey){
			
			$price	=	$this -> loadKeyByValue("plans","price","plan_key",$planKey);
			if($price)
				return $price;
			else
				return false;
			
		}
		
		function loadAllPlans(){
			
			$plans		=	array();
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				$sql	=	"SELECT plan_key,plan,price FROM plans  WHERE plan_status='1'";
				
				
				$result = 	$conn->query($sql);
				if ($result->num_rows > 0) {
					
					while($row = $result->fetch_assoc()){
												
						$plans[]=$row;
					}
					$conn->close();
				    return $plans;
				  }
				  else{
					$conn->close();
					$return['color']="red";
					$return['msg']="Empty Plans .. Please add Plans first...";
				    return $return;
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
					$return['color']="red";
					$return['msg']="There is empty districts . Please add Districts and Panchayaths first...";
				    return $return;
				  }
					  
				}
			
			
		}
		
		function deleteNewAgents($tKey){
			
			$folder1		=	$pKey;
			$folder2		=	array();
			$file_name		=	null;
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql=	"DELETE FROM temp_users WHERE  temp_user_key='".$tKey."'";
				$result = 	$conn->query($sql);
				
				if ($result) {
					
					return true;
					
				}else{
					
					return false;
					
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
		
		function markInvoicePaymentCompleteByAdmin($invoiceKey){
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				$invoiceId						=	 $this -> loadKeyByValue("invoices","id","invoice_key",$invoiceKey);
				$actualAmountBeforeTransaction	=	 $this -> loadKeyByValue("invoices","amount","public_key",$invoiceKey);
				$pendingAmountBeforeTransaction	=	 $this -> loadKeyByValue("invoices","pending_amount","public_key",$invoiceKey);
				
				$r = $actualAmountBeforeTransaction-$pendingAmountBeforeTransaction;
				
				
				if($r==0)
					$sql = "UPDATE invoices SET pending_amount='0',status='1' WHERE invoice_key='".$invoiceKey."'";
				else
					$sql = "UPDATE invoices SET pending_amount=".$r.",status='1' WHERE invoice_key='".$invoiceKey."'";
				
				if ($conn->query($sql) === TRUE){	
				
					$
					
					$sql2 = "UPDATE payments SET amount_paid=".$amount.",amount_pending=".$r." WHERE invoice_id='".$invoiceId."'";
					
					if ($conn->query($sql2) === TRUE){
						
						$sql3 = "UPDATE payment_history SET amount_paid=".$amount.",amount_deducted=".$r." WHERE invoice_id='".$invoiceId."'";
						
						if ($conn->query($sql3) === TRUE){
							
							$conn->close();
							$return['color']="green";
							$return['msg']=$amount." for Invoice :".$invoiceKey." credited...Thank You";
							return $return;
							
						}else{
							
							$conn->close();
							$return['red']="green";
							$return['msg']="Error in updating Payment History Table";
							return $return;
						}
					}else{
						
							$conn->close();
							$return['red']="green";
							$return['msg']="Error in updating Payment  Table";
							return $return;
						
					}
				}else{
					
							$conn->close();
							$return['red']="green";
							$return['msg']="Error in updating Invoice Table";
							return $return;
					
				}
			}
			
		}
		
		function markInvoicePaymentComplete($invoiceKey,$amount,$userEmail){
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$actualAmountBeforeTransaction	=	 $this -> loadKeyByValue("invoices","amount","public_key",$invoiceKey);
				$pendingAmountBeforeTransaction	=	 $this -> loadKeyByValue("invoices","pending_amount","public_key",$invoiceKey);
				
				$r = $actualAmountBeforeTransaction-$pendingAmountBeforeTransaction;
				
				
				if($r==0)
					$sql = "UPDATE invoices SET pending_amount='0',status='1' WHERE public_key='".$invoiceKey."'";
				else
					$sql = "UPDATE invoices SET pending_amount=".$r.",status='1' WHERE public_key='".$invoiceKey."'";
				
				if ($conn->query($sql) === TRUE){	
				
					$invoiceId	=	 $this -> loadKeyByValue("invoices","id","public_key",$invoiceKey);
					
					$sql2 = "UPDATE payments SET amount_paid=".$amount.",amount_pending=".$r." WHERE invoice_id='".$invoiceId."'";
					
					if ($conn->query($sql2) === TRUE){
						
						$sql3 = "UPDATE payment_history SET amount_paid=".$amount.",amount_deducted=".$r." WHERE invoice_id='".$invoiceId."'";
						
						if ($conn->query($sql3) === TRUE){
							
							$conn->close();
							$return['color']="green";
							$return['msg']=$amount." for Invoice :".$invoiceKey." credited...Thank You";
							return $return;
							
						}else{
							
							$conn->close();
							$return['red']="green";
							$return['msg']="Error in updating Payment History Table";
							return $return;
						}
					}else{
						
							$conn->close();
							$return['red']="green";
							$return['msg']="Error in updating Payment  Table";
							return $return;
						
					}
				}else{
					
							$conn->close();
							$return['red']="green";
							$return['msg']="Error in updating Invoice Table";
							return $return;
					
				}
			}
			
		}
		
		function activateNewAgent( $temp_key ){
			
			global $points;
			
			$details		=	array();
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql	=	"SELECT *  FROM temp_users  WHERE  temp_user_key='".$temp_key."' LIMIT	1";
				
				$result = 	$conn->query($sql);
				if ($result->num_rows > 0) {
					
					while($row = $result->fetch_assoc()){
												
						$details[]=$row;
					}
					
					
					$uKey	=	generateUniqueKey2('users','user_key');
					$pending_amount 	=    $this -> loadKeyByValue("plans","price","id",$details[0]['plan_id']);
					
					
					
					$sql2 = "INSERT INTO users ( user_key,user_name,password,name,user_type,plan_id,added_on,status) VALUES ('".$uKey."','".$details[0]['temp_user_name']."','".$details[0]['password']."','".$details[0]['temp_name']."','".$details[0]['temp_user_type']."','".$details[0]['plan_id']."',".time().",'1')";
					
					
					
					if ($conn->query($sql2) === TRUE){
						
						$userId	=	 $this -> loadKeyByValue("users","id","user_key",$uKey);
						$aKey	=	 generateUniqueKey2('agents','agent_key');
						
						$pending_amount1	=	0-$pending_amount;
						
						$sql3 = "INSERT INTO agents( agent_key,number_of_active_properties,number_of_inactive_properties,agent_name,contact_number,district_key,panchayat_key,user_id,balance_amount,added_on,status ) VALUES ('".$aKey."',0,0,'".$details[0]['temp_name']."','".$details[0]['contact_number']."','".$details[0]['district_key']."','".$details[0]['panchayat_key']."','".$userId."',".$pending_amount.",".time().",'1')";
						
					
						
						if ($conn->query($sql3) === TRUE){
							
							$sql4=	"DELETE FROM temp_users WHERE  temp_user_key='".$temp_key."'";
							$result4 = 	$conn->query($sql4);
							
							if ($result4) {
								
								//	
									$record_key			=	 generateUniqueKey2('agent_records','record_key');
									$agentPhotoKey		=	 generateUniqueKey2('agent_records','agent_photo_key');
									$agentAdharkey 		=    generateUniqueKey2('agent_records','agent_aadhar_key');
									$payment_history_key=	 generateUniqueKey2('payment_history','payment_history_key');
									
									$sql5 = "INSERT INTO agent_records ( record_key,user_key,agent_photo_key,agent_aadhar_key,agent_record_status) VALUES ('".$record_key."','".$uKey."','".$agentPhotoKey."','".$agentAdharkey."','0')";
									
									
									if ($conn->query($sql5) === true){
										
										
										//
										$payment_key		=	 generateUniqueKey2('payments','payment_key');
										$balance_amount		=	 0-$pending_amount;
										$invoice_key		=	 generateUniqueKey2('invoices','invoice_key');
										$invoice_public_key	=	 substr( generateUniqueKey2('invoices','public_key'),5);
										$planTitle			=	 $this -> loadKeyByValue("plans","plan","id",$details[0]['plan_id']);
										$expDate			=	 strtotime("+1 day");
										
										$invoiceTitle 		=	"Membership Plan price for ".$planTitle;
										
										$sql6 = "INSERT INTO invoices (invoice_key,public_key,user_id,amount,description,pending_amount,created_on,expired_on,status) VALUES('".$invoice_key."','".$invoice_public_key."',".$userId.",".$pending_amount.",'".$invoiceTitle."','".$pending_amount."',".time().",".$expDate.",'0')";	
										
										if ($conn->query($sql6) === true) {
									//----------------------
															
																$invoiceId2 = $this -> loadKeyByValue("invoices","id","invoice_key",$invoice_key);
																
																$sql7 = "INSERT INTO payments( payment_key,user_id,invoice_id,amount_pending,balance_amount,added_on,status) VALUES ('".$payment_key."','".$userId."','".$invoiceId2."','".$pending_amount."','".$pending_amount."','".time()."','0')";
																
																if ($conn->query($sql7) === true){
																	
																	$payment_id			=	 $this -> loadKeyByValue("payments","id","payment_key",$payment_key);
																	$sql8 = "INSERT INTO payment_history( payment_history_key,payment_id,user_id,invoice_id,amount_deducted,details,deduct_on,status) VALUES ('".$payment_history_key."','".$payment_id."','".$userId."','".$invoiceId2."',".$pending_amount.",'Membership Payment',".time().",'0')";
																	
																
																	
																	if ($conn->query($sql8) === true){
																		
																		$this -> insertPoint($userId,$points["activation"],"New User Account Activatio By Admin..");
																		return true;
																		
																	}else
																		return false;
																	
																	
																	
																}else{
																	
																	return false;
																}
										}else{
											echo "In Else Outer";exit;
											return false;
										}
									//-----------------------	
										
									}
									else
										return false;
								//
								
								
								
							}else{
								
								return false;
								
							}
							
						}else{
							return false;
						}
					}
						
				  }
				  else{
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
		
		function insertPoint($userId,$point,$label){
			
			$Oldpoint=0;
			$pointId = 0;
			
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
					
					
					$pointKey	=	generateUniqueKey2('points','point_key');
					
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
							return true;													
						}
				}
				
			}
		}
		
	
	}

?>