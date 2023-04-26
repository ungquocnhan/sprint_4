<?php

//function OpenCon()
//{
//    $dbhost = "localhost";
//    $dbuser = "root";
//    $dbpass = "king09sk!@#$";
//    $db = "php_crud";
//
//    $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n" . $conn->error);
//
//    return $conn;
//}
//
//function CloseCon($conn): void
//{
//    $conn->close();
//}

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "king09sk!@#$";
$db = "php_crud";
$port = 4306;
$mysqli = new mysqli($dbhost, $dbuser, $dbpass, $db, $port);

/* Set the desired charset after establishing a connection */
$mysqli->set_charset('utf8mb4');

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
//printf("Success... %s\n", $mysqli->host_info);
