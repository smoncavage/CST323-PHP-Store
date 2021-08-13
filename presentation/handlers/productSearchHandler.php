<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

include_once('../../../autoloader.php');

$searchPhrase = $_GET['product'];

$busserv = new ProductBusinessService();


$prod = $busserv->findByProductName($searchPhrase);

?>
<link rel = "stylesheet" href = "../css/style.css" type="text/css">
<h2>Search Results</h2>
<p>Results are as follows: <p>

<?php

if($prod){
	include('_displayProductSearchResults.php');
}
else{
	echo "No Products found with current search. Please try a different phrase. </br>";
}
?>
