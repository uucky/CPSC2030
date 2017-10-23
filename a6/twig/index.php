<!doctype html>

<head>
    <title>Pokedex - Gen 1</title>
    <link rel="stylesheet/less" type=text/css href="less.php">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>
</head>

<body>
    <?php 
    require_once "./vendor/autoload.php";
    require 'pokedex.php';
    //get templates from files,
    $loader = new Twig_Loader_Filesystem('./templates');

    //Creates enviroment
    $twig = new Twig_Environment($loader);

    $template = $twig->load('header.twig');
    echo $template->render(array('title' => 'Pokedex'));
    
    $data = new PokedexData();
    $data->connect();
    // init connection
    $pokedexes = $data->getAllPokedexes();
    // call defined public function

    $template = $twig->load('pokemon_table.twig');
    echo $template->render(array('border' => 10, 'pokes' => $pokedexes));

    $template = $twig->load('footer.twig');
    echo $template->render(array('copyrightNotice' => 'CPSC 2030','copyrightDate' => '2017'));
    ?>
</body>

<!-- references:
Background: https://www.reddit.com/r/pokemon/comments/1gdlts/i_made_you_guys_a_background/
            https://hdwallsource.com/16-bit-41533.html/16-bit-41533
Font: http://www.fontspace.com/jackster-productions/pokemon-gb
-->