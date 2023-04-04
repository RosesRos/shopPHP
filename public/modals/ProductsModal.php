<?php

$mysqli;

/**
 * modal for table products
 * 
 * @param integer $limit
 * @return array array
 */

function getLastProducts($limit = null) {
    $sql_2 = 'SELECT * FROM myShop.products ORDER BY id DESC';
    
    if ($limit) {
        $sql_2 .= " LIMIT $limit";
    }
    // d($sql_2);rsCategories
    $rs = $GLOBALS['mysqli']->query($sql_2);
    return createSmartyRsArray($rs);
}

/**
 * Get product for categories
 * @param integer $itemId
 */

function getProductByCat($itemId) {
    $itemId = intval($itemId);
    $sql_4 = "SELECT * FROM myShop.products WHERE category_id = $itemId";
    // d($sql_4);
    $rs = $GLOBALS['mysqli']->query($sql_4);
    return createSmartyRsArray($rs);
}