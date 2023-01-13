<?php


function myi(){



}
function clean($string) {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
   $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.

   return preg_replace('/-+/', '-', $string); // Replaces multiple hyphens with single one.
}
function get_client_ip_env() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
 
    return $ipaddress;
}
function sendMail($subject,$msg) {
	
	$securityMail1 ="proudeon@gmail.com";
	$securityMail2 ="gsjdivya@gmail.com";
	$securityMail3 ="tsasimohan@gmail.com";
	
	$headers = "From: security@santhigiripublications.com" . "\r\n" .
	"CC: proudeon@gmail.com";

	$vip=get_client_ip_env();
	$vpage = "http://".$_SERVER['HTTP_HOST']."".$_SERVER['PHP_SELF'];
	$vreferrer = $_SERVER['HTTP_REFERER'];
	$vdatetime = date("F j, Y, g:i a");
	$vuseragent = $_SERVER['HTTP_USER_AGENT'];
	$contentsubject = $subject;
	$subject = $vdatetime." - ".$subject;
	
	$trackers= "\r\nIp Address : ".$vip."\r\n\r\nCurrent Page :".$vpage."\r\n\r\nComing from :".$vreferrer."\r\n\r\n Date & Time :".$vdatetime."\r\n\r\nBrowser Details :".$vuseragent;
	
	$msg="\r\n".$contentsubject."\n---------------------------------------\r\n".$msg."\r\n\r\n\r\n Tracking Details \n---------------------------------------\r\n".$trackers;
	
	
	mail($securityMail1,$subject,$msg,$headers);
	mail($securityMail2,$subject,$msg,$headers);
	mail($securityMail3,$subject,$msg,$headers);
	return true;
}
function parseIncoming(){

$icon = mysqli_connect("localhost","root","","u608953737_GodDBs");

	// Check connection
	if (mysqli_connect_errno())
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }

	global $_GET, $_POST, $HTTP_CLIENT_IP, $REQUEST_METHOD, $REMOTE_ADDR, $HTTP_PROXY_USER, $HTTP_X_FORWARDED_FOR;
	$return = array();
	 
	if( is_array($_GET) ){
		$return1 = recursivePostCheck ($_GET);
		$return = array_merge ($return, $return1);

	}
	 
	if( is_array($_POST) ){
		$return1  = recursivePostCheck ( $_POST );
		$return = array_merge ($return, $return1);
	}
	
	foreach ($return as $k => $r ){
	
	if(is_string($r))
	
		$returnDBEscape[$k] = mysqli_real_escape_string($icon,$r);
	}
	$return['REQUEST_METHOD']=$_SERVER['REQUEST_METHOD'];
	$return['IP_ADDRESS']=$_SERVER['SERVER_ADDR'];
	$return['IP_CLIENT']=$_SERVER['REMOTE_ADDR'];
	$return['IP_CLIENT'] = isset ($_SERVER['HTTP_X_FORWARDED_FOR']) ? $_SERVER['HTTP_X_FORWARDED_FOR'] : $_SERVER['REMOTE_ADDR'];
	define('IS_POST',$return['REQUEST_METHOD']=='POST');
	define ( 'IP_CLIENT', $return['IP_CLIENT'] );
	return array ($return, $returnDBEscape);
}
function recursivePostCheck ( $anush ){
	/*$return = array();
	while( list($k, $v) = each($anush) ){
		if ( is_array($anush[$k]) ){
			$return[$k] = recursivePostCheck($anush[$k]);
		}
		else{
			$return[ cleanKey($k) ]  =cleanValue($v);
		}
	}*/
	$return = $anush;
	return $return;
}

function recursiveArraySearch($haystack, $needle, $index = null)
{
    $aIt     = new RecursiveArrayIterator($haystack);
    $it    = new RecursiveIteratorIterator($aIt);
   
    while($it->valid())
    {       
        if (((isset($index) AND ($it->key() == $index)) OR (!isset($index))) AND ($it->current() == $needle)) {
            return $aIt->key();
        }
       
        $it->next();
    }
   
    return false;
} 


function cleanKey($key){
	return $key;
}

function cleanValue($val){
	if ( get_magic_quotes_gpc()!=0 ){
		$val = stripslashes( ltrim ( rtrim ( $val ) ) );
	}
	$val = strip_tags($val);
	return $val;
}

function setCookies($name, $value, $sticky=1){
	if ($sticky == 1){
		$expires = time() + 60*60*24*365;
	}
	if($_SERVER['HTTP_HOST']!='127.0.0.1'&&$_SERVER['HTTP_HOST']!='localhost'){
		if(strtolower(substr($_SERVER['HTTP_HOST'],0,4))=='www.')
		$cookie_domain = substr($_SERVER['HTTP_HOST'],3);
		else
		$cookie_domain = '.'.$_SERVER['HTTP_HOST'];
	}
	else{
		$cookie_domain = "";
	}
	$cookie_path   = "/";
	 
	$name = COOKIEPREFIX.$name;
	setcookie($name, $value, $expires, $cookie_path, $cookie_domain);
}

function getCookies($name){
	global $_COOKIE;
	 
	if (isset($_COOKIE[COOKIEPREFIX.$name])){
		return urldecode($_COOKIE[COOKIEPREFIX.$name]);
	}
	else{
		return FALSE;
	}
	 
}

function getCookieFrom($cookiename,	$source){
	$cookiename = COOKIEPREFIX.$cookiename;
	$cookiestring=$source;
	$index1=strpos($cookiestring,$cookiename);
	if ($index1===false || $cookiename=="") return "";
	$index2=strpos($cookiestring,';',$index1);
	if ($index2===false) $index2=strlen($cookiestring);
	return PHPunescape(substr($cookiestring,$index1+strlen($cookiename)+1,$index2-$index1-strlen($cookiename)-1));
	 
}

function input2cookie($input, $prefix = ''){
	$parts=split(',',$prefix);
	foreach($input as $name=>$value){
		if(!is_array($value)){
			if($parts)
			foreach($parts as $part){
				if(substr($name,0,strlen($part))==$part){
					setCookies($name,$value);
					break;
				}
			}
			else{
				setCookies($name,$value);
			}
		}
	}
}

function setSession ( $name, $value = null){
	if ( $value !== null ){
		$_SESSION[$name] = $value;
	}
	else{
		unset ( $_SESSION[$name] );
	}
}

function getSession ( $name ){
	if ( isset ( $_SESSION[$name] ) ){
		return $_SESSION[$name];
	}
	else
	return false;
}

function input2session($input, $prefix = ''){
	$parts=explode(',',$prefix);
	foreach($input as $name=>$value){
		if(!is_array($value)){
			if($parts)
			foreach($parts as $part){
				if(substr($name,0,strlen($part))==$part){
					$_SESSION[$name]=$value;
					break;
				}
			}
			else{
				$_SESSION[$name]=$value;
			}
		}
	}
}

function cookie2session($prefix = ''){
	global $_COOKIE;
	$parts=split(',',$prefix);
	foreach($_COOKIE as $name=>$value){
		$name=substr($name,4);
		if($parts)
		foreach($parts as $part){
			if(substr($name,0,strlen($part))==$part){
				$_SESSION[$name]=$value;
				break;
			}
		}
		else{
			$_SESSION[$name]=$value;
		}
	}
}

function session2cookie($prefix=''){
	global $_COOKIE;
	$parts=split(',',$prefix);
	foreach($_SESSION as $name=>$value){
		if(!is_array($value)){
			if($parts)
			foreach($parts as $part){
				if(substr($name,0,strlen($part))==$part){
					setCookies($name,$value);
					break;
				}
			}
			else{
				setCookies($name,$value);
			}
		}
	}
}

function op (){
	
	$args = func_get_args();
	
	foreach ( $args as $var ){
		if ( is_object ( $var ) or is_array ( $var ) ){
			print "<br /><pre>";
			print_r ( $var );
			print "</pre>";
				
		}
		else{
			print "<br />" . $var;
		}
	}
}

function generateUniqueKey ( $table, $feild, $count, &$db = false ){

	if ( !is_object ( $db ) ) global $db;

	do{
		$ukey = substr(strtolower(md5(microtime() . rand() )), 0, $count );
		$db -> setQuery ("select id from $table where $feild = '" . $ukey . "' limit 1");
		$db -> query();
	}while ( $db -> getNumRows() );

	return $ukey;
}

function verifyExists ( $table, $feild, $value ){
	global $db;

	$db -> setQuery ( "select id from $table where $feild = '" . $value . "' limit 1" );
	$db -> query();
	
	return $db -> getNumRows() ? true : false;
}

function display ( $template, $header = "header", $footer = "footer" ){

	global $smarty;

	$error = Errors::getError();

	if ( $error != false){
		$smarty -> assign ( array ( "hasError" => 1, "errorMessage" => $error ) );
	}

	$info = Info::getInfo();
	
	if ( $info != false){
		$smarty -> assign ( array ( "hasInfo" => 1, "infoMessage" => $info ) );
	}
	if($info!=false or $error!=false)
		$smarty -> assign ("headermsg",1);
	if ( $header != null ) $smarty -> display ( $header . ".tpl" );
	$smarty -> display ( $template . ".tpl" );
	if ( $header != null ) $smarty -> display ( $footer . ".tpl" );

}

function sanatizeName($name, $filter = "[^a-zA-Z0-9\-\_\.]"){

	$name = preg_replace ( "~" . $filter . "~iU", "", $name);
	return $name;
}

function filterName ($name, $filter = "[^a-zA-Z0-9\-\_\.]"){
	return preg_match("~" . $filter . "~iU", $name) ? false : true;
}

function filterEmail ( $email ){
	return filter_var($email, FILTER_VALIDATE_EMAIL) === false ? false : true;
}

function filterWebAddress ($url){
	
	return preg_match ( "~^http\:\/\/.*\.[a-zA-Z]{1,6}$~isxU", $url);
}


function verifyEmail($email){
	return preg_match ("~^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$~", $email);
}

function filterKey ($key, $count ){
	return preg_match ( "~[a-f0-9]{" . ($count - 1) . "}~i", $key);
}

function sec2hms ($sec, $padHours = false)
{

	// holds formatted string
	$hms = "";

	// there are 3600 seconds in an hour, so if we
	// divide total seconds by 3600 and throw away
	// the remainder, we've got the number of hours
	$hours = intval(intval($sec) / 3600);

	// add to $hms, with a leading 0 if asked for
	$hms .= ($padHours)
	? str_pad($hours, 2, "0", STR_PAD_LEFT). ':'
	: $hours. ':';
	 
	// dividing the total seconds by 60 will give us
	// the number of minutes, but we're interested in
	// minutes past the hour: to get that, we need to
	// divide by 60 again and keep the remainder
	$minutes = intval(($sec / 60) % 60);

	// then add to $hms (with a leading 0 if needed)
	$hms .= str_pad($minutes, 2, "0", STR_PAD_LEFT). ':';

	// seconds are simple - just divide the total
	// seconds by 60 and keep the remainder
	$seconds = intval($sec % 60);

	// add to $hms, again with a leading 0 if needed
	$hms .= str_pad($seconds, 2, "0", STR_PAD_LEFT);

	// done!
	return $hms;

}

function addQuotesAW(&$item, $key){
	
	$item = "'" . $item . "'";
}
//Sunil on 1st October 2010

function keyToId( $table,$keyName,$value ){

	global $db;
	$db	->	setQuery( "select id from ".$table." where ".$keyName."='".$value."'  limit 1" );
	$db -> query();
//	echo $this -> db -> getQuery();
	if ($db -> getNumRows()) {
		$result = $db -> loadRow();
		return $result['id'];
	}
	else
		return false;

}
function keyToVal( $table,$wanted,$keyName,$value ){

	global $db;
	$db	->	setQuery( "select ".$wanted." from ".$table." where ".$keyName."='".$value."'  limit 1" );
	$db -> query();
	echo $db -> getNumRows();
	if ($db -> getNumRows()) {
		$result = $db -> loadRow();
		
		return $result[$wanted];
	}
	else
		return false;

}
function idToVal( $table,$wanted,$idVal){

	global $db;
	$db	->	setQuery( "select ".$wanted." from ".$table." where id=".$idVal."  limit 1" );
	$db -> query();
	echo $db -> getNumRows();
	if ($db -> getNumRows()) {
		$result = $db -> loadRow();
		
		return $result[$wanted];
	}
	else
		return false;

}

function loadCatas(){
	
	global $db;
	$db -> setQuery( "select cata_name,cata_key from #_cata where status='1'" );
	$db -> query();
	
	return $db	->	getNumRows()	?	$db	->	loadRowList()	:	false;
}
function loadCountries(){
	
	global $db;
	$db -> setQuery( "select name ,iso  from #_country" );
	$db -> query();
	
	return $db	->	getNumRows()	?	$db	->	loadRowList()	:	false;
}
function login_required(){
	global $user, $urlParser;

	if ( $user -> logined ){
		if($user->user_group==10)
			header("Location:http://santhigiripublications.com/child/superAdminDashBoard.php");
		if($user->user_group==8)
			header("Location:http://santhigiripublications.com/child/adminDashBoard.php");
		if($user->user_group==5)
			header("Location:http://santhigiripublications.com/child/officeDashBoard.php");
		if($user->user_group==1)
			header("Location:http://santhigiripublications.com/child/client_dashboard.php");
	}
	
	
}
function loadQualifications(){
	global $db;
	$db -> setQuery( "select qualification_name,qualification_key from #_qualification where status='1'" );
	$db -> query();
	
	return $db	->	getNumRows()	?	$db	->	loadRowList()	:	false;
}

function Upload( $file ){

	if (/*(($_FILES["file"]["type"] == "doc")
		|| ($_FILES["file"]["type"] == "docx")
			|| ($_FILES["file"]["type"] == "txt"))
				&& */($_FILES["file"]["size"] < 20000)){
				
				if ($_FILES["file"]["error"] > 0){
					echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
				}
				else{
					if (file_exists("upload/" . $_FILES["file"]["name"])){
						echo $_FILES["file"]["name"] . " already exists. ";
					}
					else{
						move_uploaded_file($_FILES["file"]["tmp_name"],"upload/" . $_FILES["file"]["name"]);
						echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
					}
				}
	}
	else{
		echo "Invalid file";
  }

}
function loadAllQualification(){
	global $db;
	$db -> setQuery("SELECT * FROM #_qualifications WHERE status ='1'");
	$db -> query();
	
	if($db -> getNumRows()){
		$res= $db -> loadRowList();
		return $res;
	}
	else
		return false;
	
}
function getFullNameByEmail($email){
	global $db;
	$db -> setQuery("SELECT fullname FROM #_seekers INNER JOIN #_users ON #_users.id=#_seekers.userid WHERE #_users.email='".$email."' LIMIT 1");
	$db -> query();
	
	if($db -> getNumRows()){
		$res= $db -> loadRow();
		return $res['fullname'];
	}
	else
		return false;
	}
function curPageName(){
return basename($_SERVER['PHP_SELF']);
}
function login_redirect(){

	global $user, $urlParser;

	if ( $user -> logined ){
		return true;
	}
	else{
		header("Location:http://proudeonrdc.com/books/");
		
	}

}

function UserProtected($usertype){

	global $user, $urlParser;

	if ( $user -> logined ){
		if($user->user_group==$usertype)
			return true;
		else{
			echo " No permission ";exit;
		}
	}
	else{
		header("Location:http://proudeonrdc.com/books/");
		
	}

}

function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}

?>