<?php
class PokedexData {

    protected $connection = null;

    public function connect()
    {
        $this->connection = new mysqli("localhost", "TonyHawk", "SkateBoard", "pokedex");
        // $this->connection = new mysqli("mysql:host=localhost;dbname=suggestotron", "root", null);
    }

    public function getAllPokedexes()
    {
        $query = $this->connection->query("SELECT (SELECT type_id.type FROM type_id WHERE id = type1) AS typename1, (SELECT type_id.type FROM type_id WHERE id = type2) AS typename2, Pokemon.id, Pokemon.name FROM Pokemon");
        // $query->execute();

        return $query;
    }

    public function getPokedexByID($queryID)
    {
        $query = $this->connection->query("SELECT (SELECT type_id.type FROM type_id WHERE id = type1) AS typename1, (SELECT type_id.type FROM type_id WHERE id = type2) AS typename2, Pokemon.id, Pokemon.name FROM Pokemon WHERE Pokemon.id = $queryID");

        return $query;
    }
}
?>