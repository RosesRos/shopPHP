<?php


$mysqli;
$line;


/**
 * modal for table products
 * 
 * @param integer $limit
 * @return array array
 */

function getLastProducts($limit = null) {
    
    $sql_2 = $GLOBALS['line']->findLine(dirname(__DIR__).'/../index.sql', 5);
    
    if ($limit) {
        $sql_2 .= " LIMIT $limit";
    }
//     d($sql_2);
    $rs = $GLOBALS['mysqli']->query($sql_2);
    return createSmartyRsArray($rs);
}

/**
 * Get product for categories
 * @param integer $itemId
 */

function getProductByCat($itemId) {
    $itemId = intval($itemId);
    
    $sql_4 = $GLOBALS['line']->findLine(dirname(__DIR__).'/../index.sql', 6) . $itemId;
//     d($sql_4);
    $rs = $GLOBALS['mysqli']->query($sql_4);
    return createSmartyRsArray($rs);
}



/**
 * Get data of products by ID 
 * 
 * @param integer $itemId ID product
 * @return array data of products 
 */
function getProductById($itemId) {
   $itemId = intval($itemId);
   $sql_5 = $GLOBALS['line']->findLine(dirname(__DIR__).'/../index.sql', 10) . $itemId;
//   d($sql_5);
   $result = $GLOBALS['mysqli']->query($sql_5);
   $result->fetch_assoc();
   return $result->free_result();
}