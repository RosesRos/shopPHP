<?php

function cocoAction() {
    global $load;
    $load->loadTemplate('coco');
}

function testAction() {
    global $smarty;
    global $load;
    $smarty->assign('foo', '<h1>test action</h1>');
    $load->loadTemplate('coco');
}

?>
