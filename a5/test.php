<?php
echo "importing connection...";
require 'connection.php';
require 'sqlinfo.php';
echo "Include DONE";
$sql = "SELECT Pokemon.id,Pokemon.name,type_id.type,type_id.type
FROM Pokemon
JOIN type_id on Pokemon.type1 = type_id.id";
$result = $conn->query($sql);
// clearConnection($mysqli);

$sqltype = "SELECT type_id.type, Pokemon FROM Pokemon WHERE id = ";
$resulttype = $conn->query($sqltype);
// $conn->close();
?>

<!DOCTYPE html>
<head>
    <style>table, th, td {border: 1px solid black;}</style>
</head>
<html>
    <body>
        <?php
        if ($result->num_rows > 0) {
            echo "<table><tr>
            <th>ID</th>
            <th>Name</th>
            <th>Type1</th>
            <th>Type2</th></tr>";
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                echo '<tr><td>
                <a href="detail.php?pokemon.id=$row["id"]>' . $row["id"]. "</a>
                </td>
		<td>" . $row["name"]. "</td>
		<td>" . $row["type"]. "</td>
		<td>" . $row["type"]. "</td><tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        ?>
</body>
</html>