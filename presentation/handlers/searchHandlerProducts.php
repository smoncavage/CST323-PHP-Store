<!--
Stephan Moncavage
CST-236
eCommerce Site Milestone Project
Milestone 1
27 February 2021
-->
<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
include_once '../../autoloader.php';

?>
<?php //include '../views/layout_head.php'; 
	  include '../../database/db.php';?>
<body class = "body">

<form class = "form3" method = "post" >  
 
<?php
//include "myfuncs.php";

function getAllProducts(){
	$db = new Database();
	$conn = $db->getConnection(); 
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
	}
	$query = " SELECT * FROM ecommerce.products ";
	$result = mysqli_query($conn, $query);
	if(!$result){
		die("Could not retrieve data: " . mysqli_error($conn));
	}
	$products = [];
	$index = 0;
	while($row = mysqli_fetch_assoc($result)){
		$products[$index] = array(
			$row["Product_ID"], $row["Product_Name"], $row["Product_Description"], $row["Product_Price"], $row["Product_Picture"]
		);
		++$index;	
	}
	/*
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$users[$index] = array(
			$row["ID"], $row["FIRSTNAME"], $row["LASTNAME"]
		);
		++$index;
		*/
	//mysqli_free_result($result);
	mysqli_close($conn);
	return $products;
}

function getProductsbyName($search){
	$db = new Database();
	$conn = $db->getConnection();  
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
	}
	if($search == " "){
		getAllProducts();
	}else{
		$query = " SELECT * FROM products WHERE 'Product_Name' LIKE '%$search%'";
	}
	$result = mysqli_query($conn, $query);
	if(!$result){
		die("Could not retrieve data: " . mysqli_error($conn));
		return null;
	}
	$products = [];
	$index = 0;
	while($row = mysqli_fetch_assoc($result)){
		$products[$index] = array(
			$row["Product_ID"], $row["Product_Name"], $row["Product_Description"], $row["Product_Price"], $row["Product_Picture"]
		);
		++$index;	
		return $products;
	}	
	mysqli_close($conn);
	
}

?>
<br>
<a href = "./search.html">Go Back</a>
</form>
</body>
<?php //include 'layout_foot.php'; ?>
</html>
