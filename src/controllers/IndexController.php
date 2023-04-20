<?php
// Set up Modal for categories
require dirname(__DIR__) . '/../public/modals/CategoriesModal.php';
require dirname(__DIR__) . '/../public/modals/ProductsModal.php';

function indexAction() {
    global $load;
    global $smarty;
    $rsCategories = 'getAllMainCatsWithChildren';
    $rsProducts = 'getLastProducts';
    $smarty->assign('rsCategories', $rsCategories());
    $smarty->assign('rsProducts', $rsProducts(16));
    $load->loadTemplate('index');
}

?>

