<?php
require dirname(__DIR__) . '/config/config.php';
require './library/mainFunctions.php'; // Get the main functions


$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : ucfirst('index');
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';


loadPage($controllerName, $actionName);

?>