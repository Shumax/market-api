<?php

require './vendor/autoload.php';

// use Src\Controllers\BalanceController;
// use Src\Controllers\EventController;
// use Src\Controllers\ResetController;
use Src\Infra\Routes\ApiRoutes;

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: OPTIONS,GET,POST,PUT,DELETE");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/api/', $uri );

if(!empty($uri[1])) {
  
  new ApiRoutes($uri[1]);

} else {
  header("HTTP/1.1 404 Not Found");
  exit();
}

