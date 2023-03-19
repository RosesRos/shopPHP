<?php

function cocoAction() {
    print_r('CocoController::cocoaction()');
}

function testAction() {
    global $smarty;
    $smarty->display('../resources/default/coco.tpl');
}

?>
