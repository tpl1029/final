<?php

 
// Processing form data when form is submitted
if(isset($_POST['update'])){
    session_start();
    $_SESSION["username"] = $_POST['username'];
    header("Location:./updateuser.php");
    echo $_SESSION["username"];
}




