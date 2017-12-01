<?php
$username = $_POST['username'];
$message = $_POST['message'];
$connection = new mysqli("localhost", "test", "test", "a9");
if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$result = $connection->query("SELECT max(time) from board WHERE Time < (SELECT MAX(Time) FROM board )");
echo json_encode($result->fetch_assoc());
//select the last message before we send

$connection->close();
?>
