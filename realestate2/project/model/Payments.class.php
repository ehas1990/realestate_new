<?php

	class Payments{
	
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
		
		function addProfilePayment($userKey,$amount){
			
			$profilePaymentStatus	=	0;
			$totalInAgentStatus		=	0;
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			
			
				if ($conn->connect_error) {
				  die("Connection failed: " . $conn->connect_error);
				}
				else{
					
					$userId			=	$this -> loadKeyByValue("users","id","user_key",$userKey);
					$agentId		=	$this -> loadKeyByValue("agents","id","user_id",$userId);
					$before_total	=	$this -> loadKeyByValue("agents","balance_amount","id",$agentId);
					$after_total	=	$before_total+$amount;
					
					date_default_timezone_set("Asia/Kolkata");
					
					// $payment_to		=	time()+(7 * 24 * 60 * 60); (ONE WEEK EXPIRAY TIME)
					$payment_to		=	time()+(60 * 60);
					
					$sql	=	"INSERT INTO profile_payments (payment_key,user_id,agent_id,amount,before_total,after_total,payment_from,payment_to,added_on,payment_status) VALUES ( '".generateUniqueKey2('profile_payments','payment_key')."','".$userId."','".$agentId."','".$amount."','".$before_total."','".$after_total."','".time()."','".$payment_to."','".time()."','1' )";
					
					$result = 	$conn->query($sql);
					
					
					if ($result) {
						$profilePaymentStatus	=	1;
						
						$sql2 = "UPDATE agents SET balance_amount='".$after_total."',premium_payment_expiry	=".$payment_to." WHERE id ='".$agentId."'";
						
						if ($conn->query($sql2) === TRUE) {
							
							$totalInAgentStatus		=	1;
						} 
						
						if($profilePaymentStatus ==1 AND $totalInAgentStatus==1){
						
							$return['msg']		=	"Rupees ".$amount." Credited To Your Account";
							$return['color']	=	"green";
							$conn->close();
							return $return;
						}else{
							
							$return['msg']		=	"Error in Payment Process";
							$return['color']	=	"red";
							$conn->close();
							return $return;
						}
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
		
		function loadInVoicesByUserKey($ukey,$status){
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$invoices	= array();
				$userId		=	$this -> loadKeyByValue("users","id","user_key",$ukey);
				$sql	=	"SELECT * FROM invoices WHERE user_id=".$userId."  AND status='".$status."' AND pending_amount>0";
				$result = 	$conn->query($sql);
				
				if ($result->num_rows > 0){
					
					while($row = $result->fetch_assoc()){
						$row["created_on"]=date("d-m-Y",$row["created_on"]);
						$row["expired_on"]=date("d-m-Y",$row["expired_on"]);
						$invoices[]	= $row;
					}
					$conn->close();
					return $invoices;
				}else{
					$conn->close();
					return false;
				}
			}
		}
		
		function loadAgentDetailsByUserId($userId){
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$details	= array();
				
				$sql	=	"SELECT agent_name,contact_number,district_name,panchayath_name FROM agents INNER JOIN districts  ON agents.district_key=districts.district_key INNER JOIN panchayaths ON  agents.panchayat_key=panchayaths.panchayath_key WHERE agents.user_id=".$userId." LIMIT 1"; 
				
				$result = 	$conn->query($sql);
				
				if ($result->num_rows > 0){
					
					while($row = $result->fetch_assoc()){
						$details= $row;
					}
				
					$conn->close();
					return $details;
				}else{
					$conn->close();
					return false;
				}
			}
		}
		
		function loadInvoicesByKey($iKey){
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$userId			=	$this -> loadKeyByValue("invoices","user_id","invoice_key",$iKey);
				
				$agentDetails	=	$this -> loadAgentDetailsByUserId($userId);
				//op($agentDetails);
				$details	= array();
				
				$sql	=	"SELECT * FROM invoices WHERE invoice_key='".$iKey."' LIMIT 1";
				
				
				
				$result = 	$conn->query($sql);
				
				if ($result->num_rows > 0){
					
					while($row = $result->fetch_assoc()){
						$row["created_on"]=date("d-m-Y",$row["created_on"]);
						$row["expired_on"]=date("d-m-Y",$row["expired_on"]);
						$details[]	= $row;
					}
					$details[0]["agent_name"] = $agentDetails["agent_name"];
					$details[0]["contact_number"] = $agentDetails["contact_number"];
					$details[0]["district_name"] = $agentDetails["district_name"];
					$details[0]["panchayath_name"] = $agentDetails["panchayath_name"];
					$conn->close();
					return $details;
				}else{
					$conn->close();
					return false;
				}
			}
		}
		
		function loadPremiumProfileRankByUserKeyAlone($userKey){
			
			$rank	=	array();
			
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				$userId		=	$this -> loadKeyByValue("users","id","user_key",$userKey);
				
				$sql	=	"SELECT * FROM agents ORDER BY 	balance_amount DESC";
				
				//echo "<br>  sql :".$sql;exit;
				
				$result = 	$conn->query($sql);
				
				if ($result->num_rows > 0) {
					$position=0;
					$i = 0;
					$higest	=	0;
					$topper = array();
					while($row = $result->fetch_assoc()){
						if($i==0){
							$higest	=	$row["balance_amount"];
							$topper =   $row;
						}
						$i++;
						if($row["user_id"]==$userId){
							$position	=	$i;
						}
					}
					$res["position"]	=	$position;
					$res["higest"]		=	$higest;
					$res["topper"]		=	$topper;
					return $res;						
				}
			}
		}
		
		function loadPremiumProfileRankByUserKey($userKey,$panchayath,$district){
			
			$rank	=	array();
			
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				$userId		=	$this -> loadKeyByValue("users","id","user_key",$userKey);
				
				$sql	=	"SELECT * FROM agents WHERE panchayat_key='".$panchayath."' AND district_key='".$district."' ORDER BY 	balance_amount DESC";
				
				//echo "<br>  sql :".$sql;exit;
				
				$result = 	$conn->query($sql);
				
				if ($result->num_rows > 0) {
					$position=0;
					$i = 0;
					$higest	=	0;
					$topper = array();
					while($row = $result->fetch_assoc()){
						if($i==0){
							$higest	=	$row["balance_amount"];
							$row["payment_to"] = date("d-m-Y",$row["premium_payment_expiry"]);
							$topper =   $row;
						}
						$i++;
						if($row["user_id"]==$userId){
							$position	=	$i;
						}
					}
					$res["position"]	=	$position;
					$res["higest"]		=	$higest;
					$res["topper"]		=	$topper;
					return $res;						
				}
			}
		}
		
		function loadBalanceAmountByUserKey($userKey){
			
			 $userId		=	$this -> loadKeyByValue("users","id","user_key",$userKey);
			 $balanceAmount	=	$this -> loadKeyByValue("agents","balance_amount","user_id",$userId);
			 return $balanceAmount;
		}
		
		
		
		function loadAllPaymentsByUserKey($userKey){
		    
		    $paymentHistory	=	array();
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
			    $userId		=	$this -> loadKeyByValue("users","id","user_key",$userKey);
			    
			   
			   $sql="SELECT * FROM profile_payments WHERE user_id=".$userId;
			  
			   $result = 	$conn->query($sql);
				if ($result->num_rows > 0) {
					
					while($row = $result->fetch_assoc()){
						
						$row["payment_from"] = date("Y-m-d",$row["payment_from"]);
						$row["payment_to"] = date("Y-m-d",$row["payment_to"]);
						$row["added_on"] = date("Y-m-d",$row["added_on"]);
						
						if($row["payment_to"] == time()){
							
							// Clear Balance..
							
						}
						
						$paymentHistory[]=$row;
					}
					$conn->close();
				    return $paymentHistory;
				  }
				  else{
					$conn->close();
				    return false;
				  }
			    
			    
			}
		    
		}
		
		function markInvoicePaid2($iKey){
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$invoiceId	=	$this -> loadKeyByValue("invoices","id","invoice_key",$iKey);
				
				$sql=	"DELETE FROM invoices  WHERE invoice_key='".$iKey."'";
				$result = 	$conn->query($sql);
				
				if($result){
					
					$sql2	=	"DELETE FROM payments  WHERE invoice_id=".$invoiceId;
					$result2 = 	$conn->query($sql2);
					
					if($result2){
						$sql3	=	"DELETE FROM payment_history  WHERE invoice_id=".$invoiceId;
						$result3 = 	$conn->query($sql3);
						
						if($result3){
							
							$return['msg']		=	"Invoice ".$iKey." Deleted Successfully..";
							$return['color']	=	"green";
							$conn->close();
							return $return;
							
						}else{
							
							$return['msg']		=	"Error in deleting Payment History Table";
							$return['color']	=	"red";
							$conn->close();
							return $return;
							
						}
					}else{
						
							$return['msg']		=	"Error in deleting Payment  Table";
							$return['color']	=	"red";
							$conn->close();
							return $return;
						
					}
				}else{
					
							$return['msg']		=	"Invoice Missing...";
							$return['color']	=	"red";
							$conn->close();
							return $return;
				}
				
				
			}	
		}
		function markInvoicePaid($iKey,$amount){
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$invoiceId	=	$this -> loadInvoiceIdByKey("invoices","id","invoice_key",$iKey);
				
				
				
			}	
		}
		
		function loadInvoicesByStatus($status){
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$invoices	=	array();
				
				$sql	=	"SELECT users.name,public_key,invoice_key,description,amount,created_on,expired_on FROM users INNER JOIN invoices ON users.id=invoices.user_id WHERE invoices.status='".$status."'";
							
				$result = 	$conn->query($sql);
				
				if ($result->num_rows > 0) {
					
					while($row = $result->fetch_assoc()){
						$row["created_on"] = date("Y-m-d",$row["created_on"]);
						$row["expired_on"] = date("Y-m-d",$row["expired_on"]);
						$invoices[]		   =$row;
						
					}
					$conn->close();
				    return $invoices;
				  }
				  else{
					$conn->close();
				    return false;
				  } 
				
			}
			
		}
		
		function loadPremiumProfileRankList($userKey,$panchayath,$district){
			
			$paymentHistory	=	array();
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				$agents	=	array();
				$sql	=	"SELECT agent_name,agent_key,balance_amount,agent_key,premium_payment_expiry FROM agents WHERE panchayat_key='".$panchayath."' AND district_key='".$district."' AND  premium_payment_expiry!='0' ORDER BY 	balance_amount DESC";
				
							
				$result = 	$conn->query($sql);
				$rank = 1;
				if ($result->num_rows > 0) {
					
					while($row = $result->fetch_assoc()){
						$row["payment_to"] = date("Y-m-d",$row["premium_payment_expiry"]);
						$row["rank"]= $rank;
						$agents[]	=$row;
						$rank++;
					}
					$conn->close();
				    return $agents;
				  }
				  else{
					$conn->close();
				    return false;
				  } 
				
			}
		}
		
		function isInvoiceByUserKey($uKey){
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				if (  $userId		=	$this -> loadKeyByValue("users","id","user_key",$uKey)){
					
					$amount_pending		=	$this -> loadKeyByValue("payments","amount_pending","user_id",$userId);
					
					if($amount_pending>0){
						
						return 1;
						
					}else{
						
						return 0;
					}
				}else{
						
						return 0;
				}
				
			}
			
		}
		
		function markUsPaid($key,$status){
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql = "UPDATE invoices SET status='".$status."',paid_on=".time()." WHERE invoice_key ='".$key."'";
						
				if ($conn->query($sql) === TRUE) {
					
					
					
					$userId			=	$this -> loadKeyByValue("invoices","user_id","invoice_key",$key);
					
					$amountToPay	=	$this -> loadKeyByValue("invoices","amount","invoice_key",$key);
					
					$description	=	$this -> loadKeyByValue("invoices","description","invoice_key",$key);
					
					
					$sql2 = "SELECT * FROM payments WHERE user_id=".$userId." LIMIT 1";
					
					
					
					$result = 	$conn->query($sql2);
				
					if ($result->num_rows > 0) {
						$details	=	array();
						while($row = $result->fetch_assoc()){
							$details['id']		=	$row['id'];
							$details['amount_paid']		=	$row['amount_paid'];
							$details['amount_pending']	=	$row['amount_pending'];
							$details['balance_amount']	=	$row['balance_amount'];
						}
						
						$newAmountToPay		=	$details['amount_paid']+ $amountToPay;
						//$newAmountPending	=	$details["amount_pending"]- $details['amount_paid'];
						$newAmountPending	=	$details["amount_pending"]- $amountToPay;
						$newBalanceAmount	=	$details["balance_amount"]+ $amountToPay;
						
						$sql3 = "UPDATE payments SET amount_paid=".$newAmountToPay.", amount_pending=".$newAmountPending.", balance_amount=".$newBalanceAmount." WHERE user_id=".$userId."";					
						
						
						
						$result3 = 	$conn->query($sql3);
						
						if ($result3->num_rows > 0){
							
							$pkey = generateUniqueKey2("payment_history","payment_history_key");
							
							$sql4 ="INSERT INTO payment_history (payment_history_key,payment_id,user_id,amount_paid,details,paid_onstatus) VALUES ('".$pkey."','".$details['id']."','".$userId."','".$details['amount_paid']."','".$description."','1')";
							
							
							if ($conn->query($sql4) === TRUE){
								
								return true;
							}else
								return false;
						
						}
						
					}
					
				} else
					return false;
			}
			
		}
	}

?>