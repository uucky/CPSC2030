<?php
require 'pokedex.php';

$data = new PokedexData();
$data->connect();


$queryID = $_GET['pokemon_id'];
$pokedex = $data->getPokedexByID($queryID);

?>

<html>
<body>
<table border="1">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Type1</th>
<th>Type2</th>
<th>HP</th>
<th>ATK</th>
<th>DEF</th>
<th>SAT</th>
<th>SDF</th>
<th>SPD</th>
<th>BST</th>
</tr>
</thead>
<tbody>
<?php while ( $row = $pokedex->fetch_assoc()) : ?>
<tr>
<td><?php echo $row['id']; ?></td>
<td><?php echo $row['name']; ?></td>
<td><?php echo $row['typename1']; ?></td>
<td><?php echo $row['typename2']; ?></td>
<td><?php echo $row['HP']; ?></td>
<td><?php echo $row['ATK']; ?></td>
<td><?php echo $row['DEF']; ?></td>
<td><?php echo $row['SAT']; ?></td>
<td><?php echo $row['SDF']; ?></td>
<td><?php echo $row['SPD']; ?></td>
<td><?php echo $row['BST']; ?></td>
</tr>
<?php endwhile ?>
</tbody>
</table>


</body>
</html>