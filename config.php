<?php
$host = "localhost:3307";  // Use port 3307
$username = "root";
$password = "";  // No password
$database = "mini_blog";

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>