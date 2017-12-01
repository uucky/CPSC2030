<?php
$connection = new mysqli("localhost", "test", "test", "a9");
if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>