<?php
$servername = "localhost";
$username = "root";  // default XAMPP user
$password = "";      // default XAMPP has no password
$dbname = "lost_found_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
