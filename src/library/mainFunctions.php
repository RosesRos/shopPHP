<?php

function loadPage(string $controllerName, $actionName) {
    require PATH_PREFIX . $controllerName . PATH_POST_PREFIX;
    $function = $actionName . 'Action';
    $function();
}

?>