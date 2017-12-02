<?php
include 'connection.php';

$username = $_POST['username'];
$message = $_POST['message'];

$result = $connection->query("INSERT INTO board (username, message) VALUES ('$username', '$message')");
// echo json_encode($result->fetch_assoc());

?>