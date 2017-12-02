<?php
include 'connection.php';

// $username = $_POST['username'];
// $message = $_POST['message'];

// $result = $connection->query("SELECT max(time) from board WHERE Time < (SELECT MAX(Time) FROM board )");
// echo json_encode($result->fetch_assoc());
//select the last message before we send
$result = $connection->query("SELECT * from board order by time desc");
while ($row = mysqli_fetch_assoc($result)) {
    echo $row['time'].'  ['.$row['username'].'] said: '.$row['message'].'<br>';
}
?>
