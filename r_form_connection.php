<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "r_form";

$con = mysqli_connect($servername, $username, $password, $database);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
