<?php
    include '../View/header.php';
    include './Controller/db_conn.php';
    
    $database = new Database();
    $db = $database->connect();

    if(isset($_POST["logout"])){

    require '../Model/query-logout';

    $username =  $_SESSION["username"];

    $logout = new Logout($db);
    $logout->logoutUser($username);

    header("Location:./logout.php");

    }

?>