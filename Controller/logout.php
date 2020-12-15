<?php
    session_start();
    include './db_conn.php';
    
    $database = new Database();
    $db = $database->connect();

    if(isset($_POST["logout"])){

    include '../Model/query-logout.php';

    $data =  $_SESSION["username"];

    $logout = new Logout($db);
    $logout->logoutUser($data);
    

    }else{
        header("Location:../outstandingorders.php");
    }

?>