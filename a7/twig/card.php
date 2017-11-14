<!doctype html>

<head>
    <title>Pokedex - Pokemon Card</title>
    <link rel="stylesheet/less" type=text/css href="less.php">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>
</head>

<?php
    include 'fragments/load_twig.php';
?>

<body>
    <?php
        include 'fragments/header.php';
        include 'fragments/menubar.php';
    ?>

    <div class="container">
        <table border="10">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Type 1</th>
                <th>Type 2</th>
                <th>HP</th>
                <th>ATK</th>
                <th>DEF</th>
                <th>SAT</th>
                <th>SDF</th>
                <th>SPD</th>
                <th>BST</th>
            </tr>
            </thead>
            <tbody>
                <?php
                    $data = new PokedexData();
                    $data->connect();
                    // init connection

                    $queryID = $_GET['pokemon_id'];
                    $pokedex = $data->getPokedexByID($queryID);
                    // call defined public function

                    $template = $twig->load('pokemon_card.twig');
                    echo $template->render(array('pokes' => $pokedex));  
                ?>
            </tbody>
        </table>
    </div>

    <?php
        include 'fragments/footer.php';
    ?>

</body>