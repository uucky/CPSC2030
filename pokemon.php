<?php
/**
 * @file
 * Description of what this module (or file) is doing.
 */
$sql = "SELECT * FROM Pokemon";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["name"]. " " . $row["type1"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();

echo "TEST BEGIN";

?>

<html>
 <head>
 </head>
 <body>
 <h1>PHP connect to MySQL</h1>
  <table class="pokedex">
            <tr class="header">
                <td>Id</td>
                <td>Name</td>
                <td>Title</td>
            </tr>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row["id"]."</td>";
                    echo "<td>".$row["name"]."</td>";
                    echo "<td>".$row["type1"]."</td>";
                    echo "</tr>";
                }
            } else {
                echo "0 results";
            }
            ?>
        </table>
</body>
</html>