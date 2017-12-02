<?php
include 'connection.php';

$username = $_POST['username'];
$message = $_POST['message'];
//echo "Connected successfully:".$message;

$result = $connection->query("select * from board order by time desc");
// echo json_encode($result->fetch_assoc());
// echo "<br>";

