<?php
//> constants to connect to mysqli
define('SERVER_DB', '');
define('USER_DB', '');
define('PASS_DB', '');
define('BASE_DB', '');
//<


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli(SERVER_DB, USER_DB, PASS_DB, BASE_DB);

if ($mysqli->connect_errno) {
    print_r('Error to connect' . $mysqli->connect_error . PHP_EOL);
    exit();
}

// Change character set to utf8
$mysqli->set_charset("utf8");

// $mysqli->close();

?>