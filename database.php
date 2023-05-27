<?php

$hostName = "mysql10.000webhost.com";
$dbUser = "id20815778_rajaraja12tt";
$dbPassword = "1074Raja#";
$dbName = "id20815778_mydata";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>