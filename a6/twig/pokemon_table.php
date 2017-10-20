<?php
    echo "pokemon_table.twig loading!!!";
    require 'pokedex.php';
    
    $data = new PokedexData();
    $data->connect();
    // init connection
    
    $pokedexes = $data->getAllPokedexes();
    // call defined public function
    echo "pokemon_table.twig loaded!!!!"
?>