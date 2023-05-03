<?php

session_start(); //start session

if(!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

require dirname(__DIR__) . '/config/config.php';
require dirname(__DIR__) . '/config/db.php';

require 'library/mainFunctions.php'; // Get the main functions


$controllerName = isset($_GET['controller']) ? ucwords(strtolower($_GET['controller'])) : ucwords(strtolower('index'));
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

$smarty->assign('cartCntItems', count($_SESSION['cart']));

loadPage($controllerName, $actionName);

?>