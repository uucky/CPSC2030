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
    <?php
        include 'fragments/header.php';
        include 'fragments/menubar.php';
        include 'fragments/back-to-top.php';
        include 'fragments/logon.php';
    ?>
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