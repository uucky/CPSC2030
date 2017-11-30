<?php

function clearConnection($mysql) {
    while ($mysql->more_results()) {
        $mysql->next_result();
        $mysql->use_result();
    }
}

class fetchData {

    public $connection = null;

    public function connect()
    {
        $this->connection = new mysqli("localhost", "foo", null, "ds9db");
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }
    public function close(){
        $this->connection->close();
    }
    public function checkUserExist($username, $password)
    {
        $sql = "call checkUser('$username','$password')";
        $result = $this->connection->query($sql);
        if ($result->num_rows == 0) {
            return false;
        } else {
            return true;
        }   
        clearConnection($this->connection);
    }

    // public function checkUserAdmin()
        
    public function getAllItems()
    // for index.php
    {
        $query = $this->connection->query("SELECT * FROM `merchandise`");
       
        // sub-queries
        // see https://stackoverflow.com/questions/3201359/joining-the-same-table-twice-on-different-columns
        clearConnection($this->connection);        
        return $query;
    }
}
?>