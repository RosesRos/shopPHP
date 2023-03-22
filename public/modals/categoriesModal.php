<?php
/**
 * Modal for table categories
 */

 /**
 * Initialize the connect to database
 * @param object $mysqli
 */

function getAllMainCatsWithChildren() {
    global $mysqli;
    $query_1 = 'SELECT * FROM xxx.xxx WHERE parent_id=0';

    if ($result = $mysqli->query($query_1)) {
        while($rows = $result->fetch_field()) {
            print_r($rows->value);
        }
        return $result->free_result();
    }

    $mysqli->close();
}