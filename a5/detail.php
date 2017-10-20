<?php
require 'connection.php';
$detailSql = "SELECT Pokemon.id, Pokemon.name, 
type_id.type, type_id.type, Pokemon.hp, 
Pokemon.atk, Pokemon.def, Pokemon.sat, 
Pokemon.sdf, Pokemon.spd, Pokemon.bst
FROM Pokemon
JOIN type_id on Pokemon.type1 = type_id.id
WHERE Pokemon.id = ";
$detailResult = $conn->query($detailSql);
?>