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
        $this->connection = new mysqli("localhost", "test", "test", "ds9db");
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

    public function submitForm(){
        $name = $_GET["name"];
        $model = $_GET["model"];
        $address = $_GET["address"];
        $comment = $_GET["comment"];
        
        $query = $this->connection->query("INSERT INTO board (name, model, address, comment) VALUES ('$name', '$model','$address','$comment')");
        clearConnection($this->connection);
        return $query;
    }

    public function checkOrder(){
        $name = $_POST["name"];
        $model = $_POST["model"];
        $address = $_POST["address"];
        $comment = $_POST["comment"];
        
        $query = $this->connection->query("select * from board order by model desc");
        clearConnection($this->connection);
        return $query;
    }
}
?>