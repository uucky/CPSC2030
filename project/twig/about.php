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
        <h2>About</h2>
        <div class="about">
        <p>Developer: Xiaoxu Li</p>
        <p>Email: xli77@langara.bc.ca</p>

        </div>
        
    </div>
    <?php
        include 'fragments/footer.php';
    ?>
</body>