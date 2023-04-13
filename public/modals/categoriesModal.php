<?php

$mysqli;
$line;

/**
 * Modal for table categories
 */

 /**
 * Initialize the connect to database
 * @param object $mysqli
 */

 /**
  * @param int $idCart ID categories
  */
 
function getChildrenForCart($idCart) {

    $sql_1 = $GLOBALS['line']->findLine(dirname(__DIR__).'/../index.sql', 7) . $idCart;
//     d($sql_1);
    $result = $GLOBALS['mysqli']->query($sql_1);
    $createSmartyRsArray = 'createSmartyRsArray';
    return $createSmartyRsArray($result);
}


function getAllMainCatsWithChildren() {

    $sql_2 = $GLOBALS['line']->findLine(dirname(__DIR__).'/../index.sql', 8);

    if ($result = $GLOBALS['mysqli']->query($sql_2)) {
        $smartyRS = array();
        while($rows = $result->fetch_assoc()) {
            // d($rows['id']);
            $rsChildren = getChildrenForCart($rows['id']);
            if($rsChildren) {
                $rows['children'] = $rsChildren;
            }
            $smartyRS[] = $rows;
        }
        $result->free_result();
        // d($smartyRS);
        return $smartyRS;
    }

    $GLOBALS['mysqli']->close();
}


/**
 * Get categories by id
 * @param integer $catId
 */

function getCatById($catId) {
    $catId = intval($catId);
    $sql_3 = $GLOBALS['line']->findLine(dirname(__DIR__).'/../index.sql', 9) . $catId;
    // d($sql_3);
    $result = $GLOBALS['mysqli']->query($sql_3);
    $result->fetch_assoc();
    return $result->free_result();
}