<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "virtua_bud";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>
