<?php

$serverName = "localhost";
$dBUserName = "root";
$dBPassword = "";
$dBName = "LoginSystem";

$conn = mysqli_connect($serverName, $dBUserName, $dBPassword, $dbName)

if (!conn) {
    die("Connection failed: " . msqli_connect_error());
}