<!doctype html>

<head>
    <title>Pokedex - Gen 1</title>
    <link rel="stylesheet/less" type=text/css href="less.php">
    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>
</head>

<body>
    <?php 
    require_once "./vendor/autoload.php";
    require 'pokemon.php';
    //get templates from files,
    $loader = new Twig_Loader_Filesystem('./templates');

    //Creates enviroment
    $twig = new Twig_Environment($loader);

    //output page to where the echo statement is. 
    //Stole the example from: https://twig.symfony.com/doc/2.x/intro.html
    //Replaing title with a string
    $template = $twig->load('header.twig');
    echo $template->render(array('title' => 'Pokedex'));
    
    
    // $template = $twig->load('pokemon_table.twig');
    // echo $template->render(array('border' => 10));

    $template = $twig->load('footer.twig');
    echo $template->render(array('copyrightNotice' => 'CPSC 2030','copyrightDate' => '2017'));
    ?>
</body>