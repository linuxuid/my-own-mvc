<?php
require_once __DIR__ . "/../vendor/autoload.php";
$routes = require_once __DIR__ . "/../route/config.php";

ini_set('display_errors', 1);
error_reporting(E_ALL);

$route = $_GET['route'] ?? '';

$ifRouteFound = false;
foreach($routes as $pattern=>$controllerAndAction){
    preg_match($pattern, $route, $matches);
    if(!empty($matches)){
        $ifRouteFound = true;
        break;
    }
}

if(!$ifRouteFound){
    echo "Page is not Found";
    return;
}

unset($matches[0]);

$controllerName = $controllerAndAction[0];
$actionName = $controllerAndAction[1];

$controller = new $controllerName();
$controller->$actionName(...$matches);