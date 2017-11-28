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
        $this->connection = new mysqli("localhost", "foo", null, "ds9db");
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }
    }

    var $servername = "localhost";
    var $username = "foo";
    var $password = null;
    var $dbname = "ds9db";
    var $conn;
    public function getConnSrting () {
        $con = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname)
        or die("Connection failed: " . mysqli_connect_error());      
    }

    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
        } else {
        $this->conn = $con;
        }
        return $this->conn;
        }
    }

    public function checkUserExist()
    {
        
    }

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