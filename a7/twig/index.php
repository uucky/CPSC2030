<!doctype html>
<!-- TODO:
 GET POST search
 link to single card
 -->
<head>
    <title>Pokedex - Gen 1</title>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <link rel="stylesheet/less" type=text/css href="less.php">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>
</head>

<?php 
    include 'fragments/load_twig.php'
?>

<body>

    <?php
        include 'fragments/header.php';
        include 'fragments/menubar.php';
    ?>

    <div class="container">
        <!-- pokemon table -->
        <?php
        $data = new PokedexData();
        $data->connect();
        // init connection
        $pokedexes = $data->getAllPokedexes();
        // call defined public function

        $template = $twig->load('pokemon_table.twig');
        echo $template->render(array('border' => 10, 'pokes' => $pokedexes));
        ?>
        <input onclick="change();showmore();" type="button" value="Show less" class="showmore"></input>
    </div>

    <?php
        include 'fragments/footer.php';
    ?>

</body>

<!-- references:
Background: https://www.reddit.com/r/pokemon/comments/1gdlts/i_made_you_guys_a_background/
            https://hdwallsource.com/16-bit-41533.html/16-bit-41533
Font: http://www.fontspace.com/jackster-productions/pokemon-gb
-->