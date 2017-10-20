<?php
    require_once "./vendor/autoload.php";
    //get templates from files,
    $loader = new Twig_Loader_Filesystem('./templates');
    //Creates enviroment
    $twig = new Twig_Environment($loader);
    
    $template = $twig->load('pokemon.less.twig');
    echo $template->render(array('text_color' => 'red',
                                'shadow_color' => 'black'));
?>