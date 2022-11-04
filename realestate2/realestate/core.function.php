<?php session_start();

	function op ($toPrint){
		
		echo "<pre>";
			print_r($toPrint);
		echo "/<pre>";
		
	}	
		
	function generateUniqueKey(){
		
		$mTime	=	microtime();
		$mTime2	=	md5($mTime);
		return substr($mTime2,20);
	}
	
	function generateUniqueKey2($table,$field){
		
		global $sqlUserName;
		global $sqlPassword;
		global $sqlHost;
		global $sqlDatabase;
		$uniqueKey	=	null;
		
		$conn = new mysqli($sqlHost, $sqlUserName, $sqlPassword, $sqlDatabase);
		
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		else{
			
			do{
				$mTime	=	microtime();
				$mTime2	=	md5($mTime);
				$uniqueKey	=	substr($mTime2,20);
				
				$sql	=	"SELECT id FROM ".$table."  WHERE ".$field."='".$uniqueKey."' LIMIT 1";
				$result = 	$conn->query($sql);
				
			}while($result->num_rows > 0);
			
			return $uniqueKey;
		}
		
	}
	
	function agentLoginRequired(){
		
		if(isset($_SESSION['logined']) AND $_SESSION['user_type']){
		
			if($_SESSION['logined']=="true" AND $_SESSION['user_type']=="2")
				return true;
			else{
				header("Location:login.php");
				exit;
			}	
			}
		else{
			header("Location:login.php");
			exit;
		}
		
	}
	
	function protectUser($userType){
		
		
		
		if(isset($_SESSION['logined']) AND isset($_SESSION['user_type']) AND $_SESSION['user_type']==$userType){
				
			return true;	
		}
		else{
				header("Location:login.php");
					
				
			}	
			
		
	}
	
	function loginRedirect(){
		
		
		
		if(isset($_SESSION['logined']) AND isset($_SESSION['user_type'])){
			
			
			switch($_SESSION['user_type']){
				
				case '10':
							header("Location:admindashboard.php");
							break;
				case '8':
							header("Location:executiveDashboard.php");
							break;
				case '5':
							header("Location:agentDashboard.php");
							break;
				
			}
			
		}
		
	}
	
?>