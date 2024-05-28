<?php
$server = "localhost";
$username = "f32ee";
$password = "f32ee";
$database = "f32ee";

// Create a database connection
$conn = mysqli_connect($server, $username, $password, $database);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
