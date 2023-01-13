<?php

	include_once "../core.php";

	class NightWalker{
	
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
		
		function wipeOutExpiredPremiumProfileBalance(){
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$wipeIdArray	=	array();
				$agentDetails 	=	array();
				$sql = "SELECT * FROM agents WHERE premium_payment_expiry>=".time();
				
				$result = 	$conn->query($sql);
				if ($result->num_rows > 0) {
					
					while($row = $result->fetch_assoc()) {
						$wipeIdArray[]	=$row["id"];
						$agentDetails[]	=$row;
					}
					$wipeString	=	implode("','",$wipeIdArray);
					op($agentDetails);
				}
				$sql2 = "UPDATE agents SET premium_payment_expiry='0' WHERE id IN ('".$wipeString."' )";
				$conn->query($sql2);
				
				op($wipeIdArray);
				
				for($i=0;$i<sizeof($agentDetails);$i++){
					
					$sql3	=	"INSERT INTO profile_payments (payment_key,user_id,agent_id,amount,before_total,after_total,payment_from,payment_to,added_on,payment_status) VALUES ( '".generateUniqueKey2('profile_payments','payment_key')."','".$agentDetails[$i]["user_id"]."','".$agentDetails[$i]["id"]."','".$agentDetails[$i]["balance_amount"]."','".$agentDetails[$i]["balance_amount"]."','0','".time()."','".time()."','".time()."','1' )";
					$result = 	$conn->query($sql);
					
					FROM HERE
				} 
				
				
				/* $userId			=	$this -> loadKeyByValue("agents","user_id","user_key",$userKey);
				$agentId		=	$this -> loadKeyByValue("agents","id","user_id",$userId);
				$before_total	=	$this -> loadKeyByValue("agents","balance_amount","id",$agentId);
				$after_total	=	$before_total+$amount; */
				
				// $sql3	=	"INSERT INTO profile_payments (payment_key,user_id,agent_id,amount,before_total,after_total,payment_from,payment_to,added_on,payment_status) VALUES ( '".generateUniqueKey2('profile_payments','payment_key')."','".$userId."','".$agentId."','".$amount."','".$before_total."','".$after_total."','".time()."','".$payment_to."','".time()."','1' )";
					
			}
			
		}
		
		function testWork(){
			
			$conn = new mysqli($this -> sqlHost, $this -> sqlUserName, $this -> passWord, $this -> sqlDatabase);
			
			if ($conn->connect_error) {
			  die("Connection failed: " . $conn->connect_error);
			}
			else{
				
				$sql = "DELETE FROM test WHERE id='3'";
				$conn->query($sql);
			}
			
		}
	}
	
	
	
	$nightWalker		=	new NightWalker();
	
	$nightWalker		->	wipeOutExpiredPremiumProfileBalance();

	
	

?>