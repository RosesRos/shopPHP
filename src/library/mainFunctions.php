<?php

// function loadTemplate(string $templa) {
//     global $smarty;
//     $smarty->display(TEMPLATE_PREFIX. "/{$templa}".TEMPLATE_POST_FIX);
// }


function loadPage(string $controllerName, $actionName) {
    require PATH_PREFIX . $controllerName . PATH_POST_PREFIX;
    $function = $actionName . 'Action';
    $function();
}

?>