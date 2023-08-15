<?php

include_once '../Controller/ControllerFood.php';
 if(isset($_GET['idFoods'])){
    $idFoods = $_GET['idFoods'];
    $foodController = new ControllerFood();
    $foodController->deleteFood($idFoods);
 }
?>