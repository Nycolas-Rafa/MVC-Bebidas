<?php

include_once '../Controller/ControllerDrink.php';
 if(isset($_GET['idDrinks'])){
    $idDrinks = $_GET['idDrinks'];
    $drinkController = new ControllerDrink();
    $drinkController->deleteDrink($idDrinks);
 }
?>