<!--
Stephan Moncavage
CST-236
Milestone 2
06 March 2021
User Business Service
-->

<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

require_once '../../autoloader.php';
include '../../database/UserDataService.php';
class UserBusinessService{
    function searchByFirst($pattern){
        $persons = Array();
        $service = new UserDataService();
        $persons = $service->findByFirstName($pattern);
        return $persons;
    }
    
    function searchByLast($pattern){
        $persons = Array();
        $service = new UserDataService();
        $persons = $service->findByLastName($pattern);
        return $persons;
    }
    
    function searchByID($pattern){
        $persons = Array();
        $service = new UserDataService();
        $persons = $service->findByID($pattern);
        return $persons;
    }
    
    function searchByUsername($pattern){
        $persons = Array();
        $service = new UserDataService();
        $persons = $service->findByUsername($pattern);
        return $persons;
    }
    
    function searchByRole($pattern){
        $persons = Array();
        $service = new UserDataService();
        $persons = $service->findByRole($pattern);
        return $persons;
    }
    
    function searchByAddressID($pattern){
        $persons = Array();
        $service = new UserDataService();
        $persons = $service->findByAddressID($pattern);
        return $persons;
    }
    
    function searchByCreditID($pattern){
        $persons = Array();
        $service = new UserDataService();
        $persons = $service->findByCreditID($pattern);
        return $persons;
    }

    function findByFirstNameWithAddress($pattern){
        $persons = Array();
        $service = new UserDataService();
        $persons = $service->findByFirstNameWithAddress($pattern);
        return $persons;
    }

    function returnAllPersons(){
        $persons = Array();
        $service = new UserDataService();
        $persons = $service->findAllPersons();
        return $persons;
    }
}
?>
