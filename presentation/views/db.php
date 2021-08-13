<!--
Stephan Moncavage
CST-236
eCommerce Site Milestone Project
Milestone 1
27 February 2021
Database Connection Module
-->

<?php
	/*
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
	//mysql://username:password@hostname:port/default_schema
	//mysql://ko2pnxsh1maptehb:llyf8dc3ekp9t3kl@g8r9w9tmspbwmsyo.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/nsr3yz9q7r1f2cw5
	$url = getenv('JAWSDB_URL');
	//$url = 'mysql://ko2pnxsh1maptehb:llyf8dc3ekp9t3kl@g8r9w9tmspbwmsyo.cbetxkdyhwsb.us-east-1.rds.amazonaws.com:3306/nsr3yz9q7r1f2cw5';
	$dbparts = parse_url($url);

	$servername = $dbparts['host'];
	//$servername = 'g8r9w9tmspbwmsyo.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
	$user = "ko2pnxsh1maptehb";
	$password = "llyf8dc3ekp9t3kl";
	$datbas = "nsr3yz9q7r1f2cw5";
	
    //Create Connection

	//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	$conn = mysqli_connect($servername,$user,$password,$datbas);

	//Check Connection

	if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
	*/
function dbConnect(){
	 // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
	$servername = "localhost";
	$user = "root";
	$password = "root";
	$datbas = "ecommerce";
	
    //Create Connection

	//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
	$conn = mysqli_connect($servername,$user,$password,$datbas);

	//Check Connection

	if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}else{
	    return $conn;
	}
}
?>