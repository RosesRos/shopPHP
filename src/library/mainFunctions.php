<?php

function loadPage(string $controllerName, $actionName) {
    require PATH_PREFIX . $controllerName . PATH_POST_PREFIX;

    $function = $actionName . 'Action';
    $function();
}

/**
 * Function to debug php codes
 * @param mixed d()
 * 
 */

function d($value = null, $die = 1) {
    if ($value) {
        echo 'Debug: <br> <pre>';
        print_r($value);
        echo '</pre>'; 
    }

    if($die) die();
}



/**
 * Initialize the connect to database
 * @param object $mysqli
 */
function connBase() {
    require dirname(__DIR__) . '/../bin/mysqli_database.php';
    global $mysqli;
    $query_1 = 'INSERT INTO xxx.xxx (id, parent_id, name)
    VALUES (NULL, "0", "Phones"), 
    (NULL, "0", "Tablets"), 
    (NULL, "1", "Phones Samsung"), 
    (NULL, "1", "Phones Apple"), 
    (NULL, "2", "Tablets Apple"), 
    (NULL, "2", "Tablets Acer"), 
    (NULL, "2", "Tablets Samsung")
    ';

    $result = $mysqli->query($query_1);

    if ($result === true) {
        print_r('data was created in xxxx');
    } else {
        print_r('Error creating data: ' . $mysqli->error);
    }
}

?>