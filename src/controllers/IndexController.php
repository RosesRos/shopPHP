<?php
// Set up Modal for categories
require dirname(__DIR__) . '/../public/modals/categoriesModal.php';



function indexAction() {
    global $load;
    global $smarty;
    $rsCategories = 'getAllMainCatsWithChildren';
    $smarty->assign('rsCategories', $rsCategories());
    $load->loadTemplate('index');
}

?>

