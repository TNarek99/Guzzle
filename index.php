<?php

define("ROOT_PATH", '/var/www/html/DAY38/guzzle/');

chdir(dirname(__DIR__));

//require_once ROOT_PATH . 'vendor/autoload.php';

require_once 'vendor/autoload.php';
require_once 'Controller/GistController.php';

//use GuzzleHttp\Client;

$controller = 'gist';
$action = 'list';

if (isset($_GET['controller'])) {
    $controller = $_GET['controller'];
}

if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

$controller = ucfirst($controller);
$controller .= "Controller";
$action .= "Action";

$controller = new $controller();
$controller->$action();