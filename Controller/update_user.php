<?php
$update_email = $welcome = $username = $password = $update_username = $update_password = $update_confirm_password = "";
$update_email_err  = $username_err = $password_err = $update_username_err = $update_password_err = $update_confirm_password_err = "";
 
// Processing form data when form is submitted
if(isset($_POST['submit'])){
    require './Model/query-updateuser.php';

    

    // Validate username
    if(empty(trim($_POST["username"])) ){
        $username_err = "Please enter a username.";
    } 
    
    elseif (empty(trim($_POST["password"]))) {      
    
        $password_err = "Please enter a password.";
    }
    
    elseif(trim($_POST["update_password"])!=trim($_POST["update_confirm_password"]) ){
        $update_confirm_password_err = "Passwords did not match.";
    }


    
    else{        
        
        $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
        $username = trim(htmlentities($POST["username"]));
        $password = trim(htmlentities($POST["password"]));
        $update_username = trim(htmlentities($POST["update_username"]));
        $update_password = trim(htmlentities($POST["update_password"]));
        $update_email = trim(htmlentities($POST["update_email"]));

        $userData = [
            "username" => $username,
            "password" => $password,
            "update_username" => $update_username,
            "update_password" => $update_password,
            "update_email" => $update_email
          ];

        $user = new User($db);

        if($user->checkUser($userData))
        {
           $welcome =  "The account has been updated";         
          
        }
        else
        {
            $username_err = "That account could not be located.";
        }      
        
     
    }
}




