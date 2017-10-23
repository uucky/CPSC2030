<?php
require 'pokedex.php';

$data = new PokedexData();
$data->connect();
// init connection

$pokedexes = $data->getAllPokedexes();
// call defined public function
?>

<table border="1">
<!-- For table border -->
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Type1</th>
            <th>Type2</th>
        </tr>
    </thead>
    <tbody>
        <!-- Use a while loop to make a table row for every DB row -->
        <?php echo '<pre>'; print_r($pokedexes->fetch_all()); echo '</pre>' ?>
        <?php while( $row = $pokedexes->fetch_assoc()) : ?>
        <tr>
            <td>
            <!-- Concatenating HTML and PHP dirtily -->
            <a href="details.php?pokemon_id=<?php echo $row['id']; ?>">
            <?php echo $row['id']; ?>
            </a></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['typename1']; ?></td>
            <td><?php echo $row['typename2']; ?></td>
        </tr>
        <?php endwhile ?>
    </tbody>
</table>