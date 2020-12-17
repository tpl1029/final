<?php
$email = $welcome = $username = $password = $confirm_password = "";
$email_err=$username_err = $password_err = $confirm_password_err = "";
 
// Processing form data when form is submitted
if(isset($_POST['submit'])){
    require './Model/query-createuser.php';

    

    // Validate username
    if(empty(trim($_POST["username"])) ){
        $username_err = "Please enter a username.";
    } 
    
    elseif (empty(trim($_POST["password"]))) {      
    
        $password_err = "Please enter a password.";
    }
    
    elseif(trim($_POST["password"])!=trim($_POST["confirm_password"]) ){
        $confirm_password_err = "Passwords did not match.";
    }

    elseif (empty(trim($_POST["email"]))) {      
    
        $email_err = "Please enter an email.";
    }
    
    else{

        
        
        $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
        $username = trim(htmlentities($POST["username"]));
        $password = trim(htmlentities($POST["password"]));
        $email = trim(htmlentities($POST["email"]));

        $userData = [
            "username" => $username,
            "password" => $password,
            "email" => $email
          ];

        $user = new User($db);

        if($user->checkUser($userData))
        {
            header("Location:./user_display.php");
           

          
        }
        else
        {
            $username_err = "This username is already taken.";
        }      
        
     
    }
}




