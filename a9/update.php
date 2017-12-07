<?php
include 'connection.php';

// $username = $_POST['username'];
// $message = $_POST['message'];

// $result = $connection->query("SELECT max(time) from board WHERE Time < (SELECT MAX(Time) FROM board )");
// echo json_encode($result->fetch_assoc());
//select the last message before we send
header("Content-Type: application/json");
$result = $connection->query("SELECT * from board order by time desc");
$response = array();
if (!$result->fetch_assoc()) {
    $response = array(
        'status' => false,
        'message' => 'An error occured...'
    );
} else {
    $response = array(
        'status' => true,
        'message' => 'Success',
        'data' => ($result->fetch_assoc())
    );
}
echo json_encode($response);
?>
