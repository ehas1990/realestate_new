<?php

	include_once "../core.php";
	include_once "../core.function.php";
	include_once "../points.php";
	include_once "model/Admin.class.php";
	
	$admin		=	new Admin();
	
	

$postdata = $_POST;
$msg = '';
$salt = "MIIEvgIBADANBgkqhkiG9w0BAQEFAASCBKgwggSkAgEAAoIBAQDzyGXb1wvgErd1d1YwFpJGGxWzG35d1oqQRD2Eas4bOYEAgTXmznCxZrZXHtvMhxFUK0gSInaYh5n1DfLhKn88NtgcU/cC7jD/n3DU4k9LLQt0N2ZGPmkVWxqPBDdK1JQz8b67SAMvV12YhUlTUK+YXxdvFBRNuYH9NyYfqubpzB4LrgK5GamN+TpAywEk3jgDcWJYaevcw5G1ownDpBmXlpJiTwMxac0x31xN3VdjV+VpiMBvGLfelYfQ8BUlLNOgIeLSoIFVNjiyPdjlJhnFxEEWRCugnP510NNLv+UZ4l85c/NLP3hQyNR4eVzY1Uvy8jzmvNAzEcmDgC/oqp0ZAgMBAAECggEBALr4f+bUUC9TK5HULS5EoXtTWpk8BPdDjJKJRAVDRUBsIhyY/RZATv5AoKjA6iM7lHbRmz0NYZgqqFHimN1JErzD84wGefStarcjOg6MY/RsX9SKiM5nH4FZlk0KFr41vFT6nCZXXNn6T7aiw1I7F/HtPLPc2pWiKahjm8G9+cxlWZEx/2/ovewR5lIgHlURglna5QNNNlZNsa8+jV/67Osqc57VVfgQ6I4RWlF7VB8VZ54lQ3gvqYJ+q+CtmauRfV418tLRdCj+LBYWryHot57WDDlg7PdI317AiVfycgNNyKHPUAPWXRBEBrs1KomQdrDKqFzVjix/cMDWN1XhiAECgYEA+tbk7XGN+bRL0Eu17fnq+L0u/6Wzay5FrZdFLgYkJ/bDeuH7zjKugYOzQ72cSlt5Lorp+9N71U7PL4QtCfR/ZTPRgLcIPPYlPC1oV7MUzNUkD5OTbR4XVFzz4wb6qViJ2insmpORTVkxejKoZKMXaQCKpo+gFYJyF9BfVkA2v6ECgYEA+MxWljouMEDtASQcHxRg2pOl2XqDr3rEGDTGbUnS1a/c1gSJiUTHG8UFOS+Jq6Nipx+/Egk9xyEcXZmZY/eeWdk1SFpmztnHK+yY2YcFegv6OVYhSjkR9LPwQEoB2g9+1zRSVAQLYzO5n8mQufVPDyYP8G4FfUbnLLUCAWd1ynkCgYEApHUwMt04kHa9HhwFc7lfbSXcIpCpSaRU2rNLEBnGqs0G7RIs3cwszY1jgw5V4gqHMRSyxACsN/YrsKOgQ96hh+CpgxJ9vDpFv2al+pnXEVTNB8lh5zDLauxmmnqA7Xa3KupBzjbiFSxdXBjKfvDO8HECdqHD+1ZDJ4ned9YyDwECgYA7MhsT6UneD0SUteu+9VFKEEEwqna0hMgtXjkr/ZmdYBdyEGhM8cFR+SGSBp6B6QDq9KG4f9xkCZu/JXGamGrjw8tqqJ+3bZd2+vcvInIKJNlnVPfcuhFsoHd0RGeGY5NxTrCb7s5qzv7GZuX5aMVjvFGkifjiYsFUIMkWXnBnOQKBgEefbcx7yFw0oEPEhl/dJNUIVhTuvJNw8VwkauywOTGvG/60/METB1q8oJJ8Mtmz7y+/2YCrIuz2z1LdqxlR9NaAcwhwvTrrBO8ZLaWv42GecYzPCoSdlrsoGdK+44Aba7R6w4kxYSOSu9Znbi0hwAJ32n4nli685oq7uP4/0lEt"; //Salt already saved in session during initial request.




if (isset($postdata ['key'])) {
	$key				=   $postdata['key'];
	$txnid 				= 	$postdata['txnid'];
	$_SESSION["TransectionId"] = $postdata['txnid'];
    $amount      		= 	$postdata['amount'];
	$productInfo  		= 	$postdata['productinfo'];
	
	$_SESSION["InvoiceNumber"] = $postdata['productinfo'];
	
	$firstname    		= 	$postdata['firstname'];
	$email        		=	$postdata['email'];
	$_SESSION["eMailAfterPayment"] = $postdata['email'];
	$udf5				=   $postdata['udf5'];	
	$status				= 	$postdata['status'];
	$resphash			= 	$postdata['hash'];
	//Calculate response hash to verify	
	$keyString 	  		=  	$key.'|'.$txnid.'|'.$amount.'|'.$productInfo.'|'.$firstname.'|'.$email.'|||||'.$udf5.'|||||';
	$keyArray 	  		= 	explode("|",$keyString);
	$reverseKeyArray 	= 	array_reverse($keyArray);
	$reverseKeyString	=	implode("|",$reverseKeyArray);
	$CalcHashString 	= 	strtolower(hash('sha512', $salt.'|'.$status.'|'.$reverseKeyString)); //hash without additionalcharges
	
	//check for presence of additionalcharges parameter in response.
	$additionalCharges  = 	"";
	
	If (isset($postdata["additionalCharges"])) {
       $additionalCharges=$postdata["additionalCharges"];
	   //hash with additionalcharges
	   $CalcHashString 	= 	strtolower(hash('sha512', $additionalCharges.'|'.$salt.'|'.$status.'|'.$reverseKeyString));
	}
	//Comapre status and hash. Hash verification is mandatory.
	if ($status == 'success'  && $resphash == $CalcHashString) {
		$msg = "Transaction Successful, Hash Verified...<br />";
		//Do success order processing here...
		//Additional step - Use verify payment api to double check payment.
		if(verifyPayment($key,$salt,$txnid,$status))
			$msg = "Transaction Successful, Hash Verified...Payment Verified...";
		else
			$msg = "Transaction Successful, Hash Verified...Payment Verification failed...";
		
		$result11	=	$admin	->	markInvoicePaymentComplete($productInfo,$amount,$email);
		
		$smarty	->	assign("txnid",$txnid);
		$smarty	->	assign("amount",$amount);
		$smarty	->	assign("productInfo",$productInfo);
		$smarty	->	assign("email",$email);
		$smarty	->	assign("status",$status);
		$smarty	->	assign("msg",$msg);
		
	}
	else {
		//tampered or failed
		$msg = "Payment failed for Hash not verified...";
	} 
}
else exit(0);


//This function is used to double check payment
function verifyPayment($key,$salt,$txnid,$status)
{
	$command = "verify_payment"; //mandatory parameter
	
	$hash_str = $key  . '|' . $command . '|' . $txnid . '|' . $salt ;
	$hash = strtolower(hash('sha512', $hash_str)); //generate hash for verify payment request

    $r = array('key' => $key , 'hash' =>$hash , 'var1' => $txnid, 'command' => $command);
	    
    $qs= http_build_query($r);
	//for production
    $wsUrl = "https://info.payu.in/merchant/postservice.php?form=2";
   
	//for test
	//$wsUrl = "https://test.payu.in/merchant/postservice.php?form=2";
	
	try 
	{		
		$c = curl_init();
		curl_setopt($c, CURLOPT_URL, $wsUrl);
		curl_setopt($c, CURLOPT_POST, 1);
		curl_setopt($c, CURLOPT_POSTFIELDS, $qs);
		curl_setopt($c, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($c, CURLOPT_SSLVERSION, 6); //TLS 1.2 mandatory
		curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($c, CURLOPT_SSL_VERIFYPEER, 0);
		$o = curl_exec($c);
		if (curl_errno($c)) {
			$sad = curl_error($c);
			throw new Exception($sad);
		}
		curl_close($c);
		
		
		$response = json_decode($o,true);
		
		if(isset($response['status']))
		{
			// response is in Json format. Use the transaction_detailspart for status
			$response = $response['transaction_details'];
			$response = $response[$txnid];
			
			if($response['status'] == $status) //payment response status and verify status matched
				return true;
			else
				return false;
		}
		else {
			return false;
		}
	}
	catch (Exception $e){
		return false;	
	}
}

$smarty->display("response.tpl");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mediator Kerala</title>
</head>
<style type="text/css">
	.main {
		margin-left:30px;
		font-family:Verdana, Geneva, sans-serif, serif;
	}
	.text {
		float:left;
		width:180px;
	}
	.dv {
		margin-bottom:5px;
	}
	.info{
		color:#536152;	
	}
	td{
		border-style:solid; 
		border-width:1px; 
	}
</style>
<body>
<div class="main">
	<div>
    	<img src="images/logo.png" />
    </div>
    <div>
    	
    </div>
	<!-- See below for all response parameters and their brief descriptions //-->    
    
    <div class="dv">
    <span class="text"><label>Transaction/Order ID:</label></span>
    <span><?php echo $txnid; ?></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>Amount:</label></span>
    <span><?php echo $amount; ?></span>    
    </div>
    
    <div class="dv">
    <span class="text"><label>Invoice Number:</label></span>
    <span><?php echo $productInfo; ?></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>Email ID:</label></span>
    <span><?php echo $email; ?></span>
    </div>
	
	
    
    <div class="dv">
    <span class="text"><label>Transaction Status:</label></span>
    <span><?php echo $status; ?></span>
    </div>
    
    <div class="dv">
    <span class="text"><label>Message:</label></span>
    <span><strong><?php echo $msg; ?></strong></span>
    </div>
    
    

</div>
</body>
</html>
	