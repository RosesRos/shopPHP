<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli(SERVER_NAME, USER_NAME, PASS_NAME, BASE_NAME);

if ($mysqli->connect_errno) {
    print_r('Error to connect' . $mysqli->connect_error . PHP_EOL);
} else {
    print_r('Connect succesfully' . PHP_EOL);
}

$mysqli->close();