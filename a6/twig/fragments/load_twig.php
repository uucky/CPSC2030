<?php 
    require_once "vendor/autoload.php";
    require 'pokedex.php';
    //get templates from files,
    $loader = new Twig_Loader_Filesystem('./templates');

    //Creates enviroment
    $twig = new Twig_Environment($loader);
?>