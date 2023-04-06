<?php
require dirname(__DIR__) . '/config/config.php';
require dirname(__DIR__) . '/config/db.php';

// Get the main functions
require 'library/mainFunctions.php'; 


$controllerName = isset($_GET['controller']) ? ucwords(strtolower($_GET['controller'])) : ucwords(strtolower('index'));
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

loadPage($controllerName, $actionName);

?>