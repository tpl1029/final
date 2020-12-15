<?php

// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = "";
$welcome = "";


if(isset($_POST["login"])){
     require './Model/query-login.php';

    // Check if username is empty
    if(empty(trim($_POST["username"]))){

        $username_err = "Please enter username.";
    } 

    // Check if the password is empty
    elseif(empty(trim($_POST["password"]))){

        $password_err = "Please enter your password.";
    }

    else{
        $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
        $username = trim(htmlentities($POST["username"]));
        $password = trim(htmlentities($POST["password"]));

        $userData = [
            "username" => $username,
            "password" => $password
          ];

        $login = new Login($db);
        $login->loginUser($userData);

        if($_SESSION["loggedin"] == true) 
        {              
            header("Location:./index.php");



        }else
        {
            $username_err = "That account could not be located.";
        }
    }
}



?>