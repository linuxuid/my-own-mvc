<?php 
require_once __DIR__ . "/../vendor/autoload.php";
// require_once __DIR__ . "/../app/Controllers/MainPageController/MainPageController.php";

$mainController = new \App\Controllers\MainPageController\MainPageController;
echo $mainController->index();