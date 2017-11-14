<?php
    require_once "./vendor/autoload.php";
    //get templates from files,
    $loader = new Twig_Loader_Filesystem('./templates');
    //Creates enviroment
    $twig = new Twig_Environment($loader);
    
    $template = $twig->load('pokemon.less');
    echo $template->render(array(
        'body_background' => '#7CCAF8',
        'font_face' => 'font-family: pokemon_gb; src: url(res/pokemon_gb.ttf);',
        'theme_font' => 'pokemon_gb,',
        
        'header_color' => 'rgba(0, 0, 0, 0.7)',
        'header_font' => 'Arial,',
        'header_font_size' => '3em',
        'header_background_color' => 'rgba(0, 0, 0, 0.2)',

        'table_background' => 'rgba(255, 255, 255, 0.6)',

        'footer_height' => '480px',
        'footer_background' => 'url(res/gen1bg.png)'
    ));
?>