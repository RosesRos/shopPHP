<?php

$mysqli;

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
    // global $mysqli;
    $sql_1 = "SELECT * 
            FROM xxx.xxx 
            WHERE parent_id = $idCart";
    // d($sql_1);
    $result = $GLOBALS['mysqli']->query($sql_1);
    $createSmartyRsArray = 'createSmartyRsArray';
    return $createSmartyRsArray($result);
}


function getAllMainCatsWithChildren() {
    // global $mysqli;
    $sql_2 = 'SELECT * 
            FROM xxx.xxx
            WHERE parent_id = 0';

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