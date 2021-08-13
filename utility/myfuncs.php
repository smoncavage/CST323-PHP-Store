<!--
Stephan Moncavage
CST-236
eCommerce Site Milestone Project
Milestone 1
27 February 2021
-->
<?php
//require_once('auth_session.php');
//session_start();
include '../database/db.php';
if(!function_exists('saveUserId')){
function saveUserId($username){
	$_SESSION['curuser'] = $username;
}
}
if(!function_exists('getUserId')){
function getUserId(){
	return $_SESSION['curuser'];
}
}
if(!function_exists('setTimeStamp')){
function setTimeStamp($time){
	//$time = time() - $_SESSION['datetime'];
	$_SESSION['sess_time'] = $time;
}
}

if(!function_exists('getTimeStamp')){	
function getTimeStamp(){
	if($_SESSION['login_time'] == NULL){
		header("Location: ./logout.php");
	}
	return $_SESSION['login_time'];
}
}

if(!function_exists('checkUser')){
function checkUser(){
	$db = new Database();
	$conn = $db->getConnection();
	//$user = stripslashes($_REQUEST['username']);    // removes backslashes
	$username = $_SESSION['username'];
	$user = mysqli_real_escape_string($conn, $username);
	$password = $_SESSION['pass'];
	//$pass = stripslashes($_REQUEST['password']);
	$pass = mysqli_real_escape_string($conn, $password);
	
	
	
	// Check user is exist in the database
	$query = "SELECT * FROM ecommerce.users WHERE Username = '$user'";
	$result = mysqli_query($conn, $query) or die(mysqli_error($conn));
	//reset count
	$count = 0;
	$count = mysqli_num_rows($result);
	
	//Change to checking for a password stored as a hash. added 7/26/2020 S. Mocavage
	$qry = "SELECT pass FROM ecommerce.users WHERE= '$user' ";
	$result_hash = mysqli_query($conn, $qry) or die (mysqli_error($conn));
	if(password_verify($password, $result_hash)){
		$psvfy = 1;
	}else{
		$psvfy = 0;
		echo "Invalid Password";
	}
	
	if(!$query){
		die("SQL Query failed: " . mysqli_error($conn));
	}
	if ($username != "" && $count == 1 && $psvfy == 1){
		//Set TimeStamp for Session after succesfull login attempt.
		setTimeStamp();
		
		$_SESSION['login_user'] = $user;
		//$_SESSION['login_pass'] = $pass;
		
		$valid = 1;
	}else{
		$valid = 0;	
	}
	$_SESSION['valid'] = $valid;
		return $valid;
}
}

if(!function_exists('stringToArray')){
function stringToArray($string){
	$int = str_word_count($string);
	$aryString = array_fill(0, $int, $string);
	return $aryString;
}
}

if(!function_exists('isSessionStarted')){
function isSessionStarted()
{
    if ( php_sapi_name() !== 'cli' ) {
        if ( version_compare(phpversion(), '5.4.0', '>=') ) {
            return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
        } else {
            return session_id() === '' ? FALSE : TRUE;
        }
    }
    return FALSE;
}
}
if(!function_exists('isSessionStarted')){
function getUsersByFirstName($search){
	$db = new Database();
	$conn = $db->getConnection(); 
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
	}
	$query = " SELECT * FROM users WHERE FIRST_NAME LIKE '%$search%'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		die("Could not retrieve data: " . mysqli_error($conn));
		return null;
	}
	$users = [];
	$index = 0;
	while($row = mysqli_fetch_assoc($result)){
		$users[$index] = array(
			$row["ID"], $row["FIRST_NAME"], $row["LASTNAME"], $row["USERNAME"]
		);
		++$index;	
	}	
	mysqli_close($conn);
	return $users;
}
}

if(!function_exists('isSessionStarted')){
function getUsersByLastName($search){
	$db = new Database();
	$conn = $db->getConnection(); 
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
	}
	$query = " SELECT * FROM users WHERE LASTNAME LIKE '%$search%'";
	$result = mysqli_query($conn, $query);
	if(!$result){
		die("Could not retrieve data: " . mysqli_error($conn));
		return null;
	}
	$users = [];
	$index = 0;
	while($row = mysqli_fetch_assoc($result)){
		$users[$index] = array(
			$row["ID"], $row["FIRST_NAME"], $row["LASTNAME"], $row["USERNAME"]
		);
		++$index;	
	}	
	mysqli_close($conn);
	return $users;
}
}

?>
