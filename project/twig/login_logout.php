<?php
session_start();

echo "Logged out. ";
echo "Redirect in 5 seconds...";

session_unset(); 
session_destroy(); 

// include 'login.php';

?>
<script>setTimeout(function () {    
    window.location.href = 'login.php'; 
},5000); </script>