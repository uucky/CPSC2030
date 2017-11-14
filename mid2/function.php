<?php
// require 'sqlinfo.php';
class fetchData {

    protected $connection = null;

    //     $servername = "localhost";
    //     $username = "TonyHawk";
    //     $password = "SkateBoard";
    //     $dbname = "itemdex";

    public function connect()
    {
        $this->connection = new mysqli("localhost", "mid2", "mid2", "ds9");
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    //You need this after running a SQL query that
    //calls a stored procedure. For some reason, 
    //procedure calls return multiple results, so the 
    //extra result needs to be cleared.
    //
    //Example:
    // $result = $conn->query("call getWeak('Ivysaur')");
    // clearConnection($conn);

    public function clearConnection($mysql) {
        while ($mysql->more_results()) {
            $mysql->next_result();
            $mysql->use_result();
        }
    }

    public function getAllItems()
    // for index.php
    {
        $query = $this->connection->query("CALL getIndex();");
        // sub-queries
        // see https://stackoverflow.com/questions/3201359/joining-the-same-table-twice-on-different-columns
        $this->clearConnection($this->connection); 
        return $query;
    }

    public function getItemByID($queryID)
    // for details.php
    {
        $queryID = $this->connection->real_escape_string($queryID);
        // escape characters to prevent injection
        $query = $this->connection->query("CALL detailedInfo($queryID);");
        $this->clearConnection($this->connection);
        return $query;
    }
}
?>