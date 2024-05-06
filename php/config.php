<?php
$host = "localhost";
$username = "root";
$password = ""; // by default is Empty
$database = "login_page";

// Create connection
$con = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
