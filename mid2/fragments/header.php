<?php
    $template = $twig->load('header.twig');
    echo $template->render(array('title' => 'DS9', 'subtitle' => 'Episode Guide'));
?>