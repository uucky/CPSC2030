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
        <h2 class="promo-text">NEW ARRIVAL
        </h2>
    </div>
    <div class="promo-detail">
        <h3>Merchandise</h3>
        <p>We have an exciting news for you. You can have your favorite spaceship model now! Every model is made by professionals, 100% percectly presents the original's material. *Not all images show the exact version of the ship, or the correct registry of the version being produced.
        </p>
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