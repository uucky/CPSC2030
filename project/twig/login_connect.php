<?php
session_start();
// include "login_lib.php";
// $_SESSION[$loggedInKey] = false;
// loginRouter();

// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";

?>