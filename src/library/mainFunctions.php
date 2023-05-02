<?php

function loadPage(string $controllerName, $actionName) {
    require PATH_PREFIX . $controllerName . PATH_POST_PREFIX;

    $function = $actionName . 'Action';
    $function();
}

/**
 * Function to debug  codes
 * @param mixed d()
 * 
 */

function d($value = null, $die = 1) {
    if ($value) {
        echo 'Debug: <br> <pre>';
        print_r($value);
        echo '</pre>'; 
    }

    if($die) die();
}


/**
 * @param $result array variables
 */

function createSmartyRsArray($result) {
    if (!$result) return false;
    $smartyRS  = array();
    while($rows = $result->fetch_assoc()) {
        $smartyRS[] = $rows;
    }
    // d($smartyRS);
    return $smartyRS;
}