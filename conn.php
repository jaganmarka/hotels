<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";

// Create connection
$config = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($config->connect_error) {
    die("Connection failed: " . $config->connect_error);
}
?>