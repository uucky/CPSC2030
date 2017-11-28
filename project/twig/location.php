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
    <?php
        include 'fragments/header.php';
        include 'fragments/menubar.php';
        include 'fragments/back-to-top.php';        
    ?>
    <div class="container">
        <h2>Location</h2>
        <p>You can find us on YE Ceti, -1145.14, -7102, -89.64.</p>
        <img src="res/map.png" alt="map">
    </div>
    <?php
        include 'fragments/footer.php';
    ?>
</body>