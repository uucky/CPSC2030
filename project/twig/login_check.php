<?php
    // header( "refresh:5;url=order.php" );
    $connection = new mysqli("localhost", "test", "test", "ds9db");
    if ($connection->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // $name = $_POST["name"];
    // $model = $_POST["model"];
    // $address = $_POST["address"];
    // $comment = $_POST["comment"];
    
    $result = $connection->query("select * from board");    
    // echo json_encode($result->fetch_assoc());
    while ($row = mysqli_fetch_assoc($result)) {
        echo 'Customer ['.$row['name'].'] ordered issue ['.$row['model'].'] Address: ['.$row['address'].']. Comment: ['.$row['comment'].']<br>';
        
    }
?>