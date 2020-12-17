<?php

$username = $update_email = $welcome = $update_username = $update_password = $update_confirm_password = "";
$update_email_err  = $update_username_err = $update_password_err = $update_confirm_password_err = "";
 
// Processing form data when form is submitted
if(isset($_POST['submit'])){
    require './Model/query-update-user.php';
    $username = $_SESSION["username"];    

   
        
        $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);      
        $update_username = trim(htmlentities($POST["update_username"]));
        $update_password = trim(htmlentities($POST["update_password"]));
        $update_email = trim(htmlentities($POST["update_email"]));

        $userData = [
            "username" => $username,
            "update_username" => $update_username,
            "update_password" => $update_password,
            "update_email" => $update_email
          ];

        $user = new User($db);

        if($user->checkUser($userData))
        {   header("Location:./user_display.php");
           $welcome =  "The account has been updated";         
          
        }
        else
        {
            $username_err = "That account could not be located.";
        }      
        
     
    }





