<?php
session_start();
include "login_lib.php";
$_SESSION[$loggedInState] = false;
loginRouter();
?>