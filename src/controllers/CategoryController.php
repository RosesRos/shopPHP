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
    // $rsCategory($catId);

    if ($rsCategory['parent_id'] == 0) {
        $rsChildCat($catId);
    } else {
        $rsProducts($catId);
    }
    // d($rsCategory['name']);

    $rsCategories = 'getAllMainCatsWithChildren';

    $smarty->assign('pageTitle', 'product category ' . $rsCategory['name']);

    $smarty->assign('rsCategory', $rsCategory($catId));
    $smarty->assign('rsProducts', $rsProducts($catId));
    $smarty->assign('rsChildCat', $rsChildCat($catId));

    $smarty->assign('rsCategories', $rsCategories());
    $load->loadTemplate('category');
}