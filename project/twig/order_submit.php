<?php
    header( "refresh:5;url=order.php" );
    require 'fetch_data.php';
    $data = new fetchData();
    $data->connect();
    // $name = $_GET["name"];
    // $model = $_GET["model"];
    // $address = $_GET["address"];
    // $comment = $_GET["comment"];

    $result = $data->submitForm(); 
?>
Thank you! <?php echo $_GET["name"]; ?>,<br> your order has been placed.<br>You will be redirect back in 5 seconds ...