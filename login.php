<?php

session_start();
if (isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $psswrd = $_POST["password"];

    if(!isset($_SESSION["username"]) && strlen(trim($username))>0 && strlen(trim($psswrd))>=6){
        $_SESSION["username"] = $username;
        echo "<h1>login success.</h1>";
    }else if(strlen(trim($username))>0 && strlen(trim($psswrd))>=6 && $_SESSION["username"]){
        echo "<h1>Already logined.</h1>";
        unset($_SESSION["username"]);
    }else{
        echo"<h1>Login failed.</h1>";
    }
}else{
    echo "username or password error!";
}
