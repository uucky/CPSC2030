<?php
require 'sqlinfo.php';
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
        $query = $this->connection->query("CALL getAllDex();");
        // sub-queries
        // see https://stackoverflow.com/questions/3201359/joining-the-same-table-twice-on-different-columns
        clearConnection($this->connection);        
        return $query;
    }

    public function getPokedexByID($queryID)
    // for details.php
    {
        $queryID = $this->connection->real_escape_string($queryID);
        // escape characters to prevent injection
        $query = $this->connection->query("CALL getDexByID($queryID);");
        clearConnection($this->connection);
        return $query;
    }
}
?>