<?php
class PokedexData {

    protected $connection = null;

    public function connect()
    {
        $this->connection = new mysqli("localhost", "TonyHawk", "SkateBoard", "pokedex");
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        } 
    }

    public function getAllPokedexes()
    // for index.php
    {
        $query = $this->connection->query("SELECT 
        (SELECT type_id.type FROM type_id WHERE id = type1) AS typename1, 
        (SELECT type_id.type FROM type_id WHERE id = type2) AS typename2, 
        Pokemon.id, Pokemon.name 
        FROM Pokemon");
        // sub-queries
        // see https://stackoverflow.com/questions/3201359/joining-the-same-table-twice-on-different-columns
        return $query;
    }

    public function getPokedexByID($queryID)
    // for details.php
    {
        $queryID = $this->connection->real_escape_string($queryID);
        // escape characters to prevent injection
        $query = $this->connection->query("SELECT 
        (SELECT type_id.type FROM type_id WHERE id = type1) AS typename1, 
        (SELECT type_id.type FROM type_id WHERE id = type2) AS typename2, 
        Pokemon.id, Pokemon.name, Pokemon.HP, Pokemon.ATK, Pokemon.DEF, Pokemon.SAT, Pokemon.SDF, Pokemon.SPD, Pokemon.BST 
        FROM Pokemon 
        WHERE Pokemon.id = $queryID");

        return $query;
    }
}
?>