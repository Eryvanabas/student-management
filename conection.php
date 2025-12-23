<?php
$servername = "localhost";   // Usually localhost
$username = "root";          // Your DB username
$password = "";              // Your DB password
$dbname = "school";    // Your database name

// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 ?>