<?php
//You need this after running a SQL query that
//calls a stored procedure. For some reason, 
//procedure calls return multiple results, so the 
//extra result needs to be cleared.
//
//Example:
// $result = $conn->query("call getWeak('Ivysaur')");
// clearConnection($conn);
function clearConnection($mysql) {
    while ($mysql->more_results()) {
        $mysql->next_result();
        $mysql->use_result();
    }
}
?>