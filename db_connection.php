<?php
$host = 'localhost';
$user = 'root';
$pass = ''; // default in XAMPP
$db   = 'onion_disease_db';

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
