<!doctype html>
<head>
    <title>Midterm 2</title>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <link rel="stylesheet/less" type=text/css href="mid2.less">
    <script src="less.min.js"></script>
</head>

<?php 
    include 'fragments/load_twig.php'
?>

<body>

    <?php
        include 'fragments/header.php';
        $data = new fetchData();
        $data->connect();
        // init connection
        $items = $data->getItemByID('1,1');
        // call defined public function
        $template = $twig->load('card.twig');
        echo $template->render(array('things' => $items));
    ?>

    <div class="container">
        <?php
            $items = $data->getAllItems();
            $template = $twig->load('table.twig');
            echo $template->render(array('border' => 1, 'things' => $items));
        ?>
    </div>
    <!-- <?php echo '<pre>'; print_r($items); echo '</pre>' ?> -->

</body>