<?php

$mysqli;

/**
 * modal for table products
 * 
 * @param integer $limit
 * @return array array
 */

function getLastProducts($limit = null) {
    $sql_2 = 'SELECT *
            FROM myShop.products
            ORDER BY id DESC';
    
    if ($limit) {
        $sql_2 .= " LIMIT $limit";
    }
    // d($sql_2);rsCategories
    $rs = $GLOBALS['mysqli']->query($sql_2);
    return createSmartyRsArray($rs);
}