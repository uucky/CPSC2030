<?php
session_start();
$username = $_POST['username'];
$message = $_POST['message'];
$connection = new mysqli("localhost", "test", "test", "a9");
if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$result = $connection->query("INSERT INTO board (username, message) VALUES ('$username', '$message')");
// echo json_encode($result->fetch_assoc());

$connection->close();
?>