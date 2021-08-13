<!--
Stephan Moncavage
CST-236
Milestone 2
06 March 2021
-->

<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

require_once '../../autoloader.php';
include '../../database/ProductDataService.php';
class ProductBusinessService{
    function searchByName($pattern){
        $products = Array();
        $service = new ProductDataService();
        $products = $service->findByProductName($pattern);
        return $products;
    }

    function searchByPrice($pattern){
        $products = Array();
        $service = new ProductDataService();
        $products = $service->findByPrice($pattern);
        return $products;
    }

    function searchByID($pattern){
        $products = Array();
        $service = new ProductDataService();
        $products = $service->findByProductID($pattern);
        return $products;
    }

    function returnAllProd(){
        $products = Array();
        $service = new ProductDataService();
        $products = $service->returnAllProducts();
        return $products;
    }
}
?>

