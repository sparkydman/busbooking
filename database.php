<?php
$conn = new mysqli('localhost', 'root','', 'busbooking');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} ?>
