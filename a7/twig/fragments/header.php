<?php
    $template = $twig->load('header.twig');
    echo $template->render(array('title' => 'Pokedex'));
?>