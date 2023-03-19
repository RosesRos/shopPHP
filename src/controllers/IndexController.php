<?php

function indexAction() {
    global $smarty;
    print_r('IndexController::indexFunction()');
    $smarty->display('../resources/default/index.tpl');
}

?>

