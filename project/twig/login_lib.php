<?php
$loggedInState = "loggedIn";
require 'fetch_data.php';

function login($user, $pass){
    global $loggedInState;
    $_SESSION[$loggedInState] = false;
    $conn = new fetchData();
    $conn->connect();
    $result = $conn->checkUserExist($user, $pass);
    $_SESSION[$loggedInState] = $result;
    
    $conn->close();
}

function isLoggedIn(){
    global $loggedInState;
    if(!array_key_exists($loggedInState, $_SESSION)){
        return false;
    }

    return $_SESSION[$loggedInState];
}


function loginCheck(){
    global $loggedInState;
    if(array_key_exists("username", $_POST) && array_key_exists("password", $_POST)) {
        $_SESSION[$loggedInState] = false;
        login($_POST["username"], $_POST["password"]);
    } else if (!array_key_exists($loggedInState, $_SESSION)){
        $_SESSION[$loggedInState] = false;
    }
    return $_SESSION[$loggedInState];
}
?>