<?php
$servername = "localhost";
$database = "php_asm";
$username = "root";
$password = "mysql";

// Create connection

$conn = new mysqli($servername, $username, $password, $database);

// Check connection

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}
?>