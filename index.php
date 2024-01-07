<?php


if (!isset($_SESSION)) {
    session_start();
}


// if ($_SERVER['REQUEST_METHOD'] = $_POST['_method']) {

//     header('Location: /');
//     exit();
// } else {


// }

require 'Core/Router.php';
require 'functions.php';
// require 'Core/Middleware/Auth.php';
// require 'Core/Middleware/Guest.php';

$router = new Router;


$routes = require 'routes.php';
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri, $method);
