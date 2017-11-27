<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet/less" type=text/css href="ds9.less">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>
    <title>Space Flight</title>
</head>

<?php 
include 'fragments/load_twig.php'
?>

<body>
    <!-- <div>
        <video autoplay loop preload class="fullscreen-video-bg">
        <source src="res/giphy.mp4" type="video/mp4">
        Your browser does not support the video tag.
        </video>
    </div> -->
    <div class="top">
        <?php include 'fragments/header.php'; ?>
        <?php include 'fragments/menubar.php'; ?>
    </div>

    <?php include 'fragments/back-to-top.php'; ?>
    <div class="promo">
        <img class="promo-pic" src="res/promo.jpg" alt="promo">
        <div class="promo-text">NEW ARRIVAL</div>
    </div>

    <div class="container">
        <?php
        require 'fetch_data.php';
        $data = new fetchData();
        $data->connect();
        // init connection
        $allItems = $data->getAllItems();
        // call defined public function

        $template = $twig->load('table.twig');
        echo $template->render(array('items' => $allItems));
        // clearConnection();
        // echo '<pre>'; print_r($allItems->fetch_all()); echo '</pre>'
        ?>
    </div>
    <?php
        include 'fragments/footer.php';
    ?>
</body>