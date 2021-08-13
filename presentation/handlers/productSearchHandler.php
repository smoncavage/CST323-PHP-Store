<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

include('../../../autoloader.php');

$searchPhrase = $_GET['product'];

$busserv = new ProductBusinessService();


$prod = $busserv->findByPorductName($searchPhrase);

?>
<h2>Search Results</h2>
<p>Results are as follows: <p>

<?php

if($prod){
	incllude('_displayProductSearchResults.php');
}
else{
	echo "No Products found with current search. Please try a different phrase. </br>";
}
?>
