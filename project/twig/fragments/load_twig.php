<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <link rel="stylesheet/less" type=text/css href="ds9.less">
    <script src="less.min.js"></script>
    <script type="text/javascript" src="jquery.js"></script>
    <script src="ds9.js"></script>
    <title>Space Flight</title>
</head>

<?php 
    require_once "vendor/autoload.php";
    
    //get templates from files,
    $loader = new Twig_Loader_Filesystem('./templates');

    //Creates enviroment
    $twig = new Twig_Environment($loader);
?>