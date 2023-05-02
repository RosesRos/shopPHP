<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

/**
 *  ProductController
 * 
 *  Controller page product (/product/1)
 * 
 */

// Setup Modals 
require dirname(__DIR__) . '/../public/modals/CategoriesModal.php';
require dirname(__DIR__) . '/../public/modals/ProductsModal.php';

/**
 * Format page
 * 
 * @param object $smarty template 
 */
function indexAction(){ 
    global $load;
    global $smarty;
    
    $itemId = isset($_GET['id']) ? $_GET['id'] : null; 
    if($itemId == null) exit();

	 // get Product's Data
    $rsProduct = 'getProductById';
	 
	 //  get all categories 
    $rsCategories = 'getAllMainCatsWithChildren';

    $smarty->assign('itemInCart', 0);
    if(in_array($itemId, $_SESSION['cart'])){
        $smarty->assign('itemInCart', 1);
    }
     
//    $smarty->assign('pageTitle', '');
    $smarty->assign('rsProduct', $rsProduct($itemId));
    $smarty->assign('rsCategories', $rsCategories());
    $smarty->assign('coco', 'coco test');

    $load->loadTemplate('product');
}