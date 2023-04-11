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

    $rsCategories = 'getAllMainCatsWithChildren';
    


    if (is_array($rsCategory) && isset($rsCategory['parent_id'])) {
        return $rsCategory['parent_id'];
        if ($rsCategory['parent_id'] == 0) {
            $rsChildCat($catId);
        } else {
            $rsProducts($catId);
        }
    }
    

    $smarty->assign('rsCategory', $rsCategory($catId));
    $smarty->assign('rsProducts', $rsProducts($catId));
    $smarty->assign('rsChildCat', $rsChildCat($catId));

    $smarty->assign('rsCategories', $rsCategories());
    $load->loadTemplate('category');
}