<!DOCTYPE html>

<head>
    <meta charset="UTF-8"> 
    <link rel="stylesheet/less" type=text/css href="ds9.less">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>
    <title>Space Flight</title>
</head>

<?php 
session_start();
include_once 'login_lib.php';
include 'fragments/load_twig.php'
loginCheck();
?>

<body>
    <?php
        include 'fragments/header.php';
        include 'fragments/menubar.php';
        include 'fragments/back-to-top.php';        
    ?>
    <div class="container">
        <h2>Logged</h2>
        <?php echo $template2->render(array("session_id"=>session_id())); ?>
    </div>
    <?php
        include 'fragments/footer.php';
    ?>
</body>