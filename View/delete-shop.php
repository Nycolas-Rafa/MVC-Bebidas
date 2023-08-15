<?php

include_once '../Controller/ControllerShop.php';
 if(isset($_GET['idShopping'])){
    $idShopping = $_GET['idShopping'];
    $shopController = new ControllerShop();
    $shopController->deleteShop($idShopping);
 }
?>