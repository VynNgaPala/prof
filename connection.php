<?php
$servername = "localhost";
$username = "root";
$password = ""; // default is empty for root in XAMPP
$dbname = "pf";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
