<?php
$username = $_POST['username'];
$message = $_POST['message'];
$connection = new mysqli("localhost", "test", "test", "a9");
if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//echo "Connected successfully:".$message;

$result = $connection->query("select * from board order by time desc");
echo json_encode($result->fetch_assoc());
// echo "<br>";
$connection->close();
