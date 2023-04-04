<?php

/**
 * Categories controller action
 * 
 */

require dirname(__DIR__) . '/../public/modals/categoriesModal.php';
require dirname(__DIR__) . '/../public/modals/ProductsModal.php';

/**
 * Create page Categories
 * @param object $load template
 * @param object $smarty template
 */

function indexAction() {
    global $load;
    global $smarty;

    $catId = isset($_GET['id']) ? $_GET['id'] : null;
    if ($catId == null) exit();

    $rsCategory = 'getCatById';
    $rsChildCat = 'getChildrenForCart';
    $rsProducts = 'getProductByCat';
    

    if ($rsCategory['parent_id'] == 0) {
        $rsChildCat($catId);
    } else {
        $rsProducts($catId);
    }

    $rsCategories = 'getAllMainCatsWithChildren';

    $smarty->assign('pageTitle', $rsCategory['name']);

    $smarty->assign('rsCategory', $rsCategory($catId));
    $smarty->assign('rsProducts', $rsProducts);
    $smarty->assign('rsChildCat', $rsChildCat);

    $smarty->assign('rsCategories', $rsCategories());
    $load->loadTemplate('category');
    // d($rsProducts($catId));
}