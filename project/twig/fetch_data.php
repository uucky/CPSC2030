<?php

function clearConnection($mysql) {
    while ($mysql->more_results()) {
        $mysql->next_result();
        $mysql->use_result();
    }
}

class fetchData {

    protected $connection = null;

    public function connect()
    {
        $this->connection = new mysqli("localhost", "foo", NULL, "ds9");
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    public function getAllItems()
    // for index.php
    {
        $query = $this->connection->query("SELECT * FROM `ds9data`");
        // sub-queries
        // see https://stackoverflow.com/questions/3201359/joining-the-same-table-twice-on-different-columns
        clearConnection($this->connection);        
        return $query;
    }

    // public function getPokedexByID($queryID)
    // // for details.php
    // {
    //     $queryID = $this->connection->real_escape_string($queryID);
    //     // escape characters to prevent injection
    //     $query = $this->connection->query("CALL getDexByID($queryID);");
    //     clearConnection($this->connection);
    //     return $query;
    // }
}
?>