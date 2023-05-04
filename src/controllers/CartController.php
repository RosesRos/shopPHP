<?php

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */


// Setup Modals 
require dirname(__DIR__) . '/../public/modals/CategoriesModal.php';
require dirname(__DIR__) . '/../public/modals/ProductsModal.php';

/**
 * Add product to Cart
 * 
 * @param integer id GET parametr - ID  added product
 * @return json information about product in Cart 
 */
function addtocartAction(){
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null; 
    if(!$itemId) return false;

    $resData = array();

    if(isset($_SESSION['cart']) && array_search($itemId, $_SESSION['cart']) === false){
        $_SESSION['cart'][] = $itemId;
        $resData['cntItems'] = count($_SESSION['cart']);
        $resData['success'] = 1;
    } else {
        $resData['success'] = 0;
    }

    echo json_encode($resData);
}


/**
   * Remove product from cart
   * 
   * @param integer id GET parametr - ID removed from cart
   * @return json information about success 
   */
 function removefromcartAction(){
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null; 
    if(! $itemId) exit();
     
    $resData = array();
    $key = array_search($itemId, $_SESSION['cart']);
    if($key !== false){
        unset($_SESSION['cart'][$key]);
        $resData['success'] = 1;
         $resData['cntItems'] = count($_SESSION['cart']);
    } else {
        $resData['success'] = 0;
    }
     
    echo json_encode($resData);
 }