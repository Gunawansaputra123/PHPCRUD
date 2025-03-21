<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "pwlgenap2019-akademik";

$connection = mysqli_connect($host, $user, $password, $db);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>