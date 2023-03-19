<?php

function cocoAction() {
    print_r('CocoController::cocoaction()');
}

function testAction($smarty, $load) {
    // global $smarty;
    // global $load;
    $smarty->assign('foo', '<h1>test action</h1>');
    // loadTemplate('coco');
    $load->loadTemplate('coco');
}

?>
