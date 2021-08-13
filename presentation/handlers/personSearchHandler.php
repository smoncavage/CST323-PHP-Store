<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

include('../../autoloader.php');
//include('../../../BusinessService/UserBusinessService.php');

$searchPhrase = $_GET['searchPerson'];

$busserv = new UserBusinessService();

$persons = $busserv->findByFirstNameWithAddress($searchPhrase);

?>
<link rel = "stylesheet" href = "../css/style.css" type="text/css"> 
<h2>Search Results</h2>
<p>Results are as follows: <p>

<?php

if($persons){
	include('_displayPeopleSearchResults.php');
}
else{
	echo "No Users found with current search. Please try a different phrase. </br>";
}
?>