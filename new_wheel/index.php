<?php
require 'pokedex.php';

$data = new PokedexData();
$data->connect();

$pokedexes = $data->getAllPokedexes();

?>
<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Type1</th>
            <th>Type2</th>
        </tr>
    </thead>
    <tbody>
        <!--Use a while loop to make a table row for every DB row-->
        <?php while( $row = $pokedexes->fetch_assoc()) : ?>
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td><a href="details.php?pokemon_id=<?php echo $row['id']; ?>"><?php echo $row['id']; ?></a></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['typename1']; ?></td>
            <td><?php echo $row['typename2']; ?></td>
        </tr>
        <?php endwhile ?>
    </tbody>
</table>