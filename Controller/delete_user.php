<?php
$welcome = $username = $password = "";
$username_err = $password_err = "";
 
// Processing form data when form is submitted
if(isset($_POST['submit'])){
    require './Model/query-deleteuser.php';    

    // Validate username
    if(empty(trim($_POST["username"])) ){
        $username_err = "Please enter a username.";
    } 
    
    elseif (empty(trim($_POST["password"]))) {      
    
        $password_err = "Please enter a password.";
    }
    
    else{

        // should return JSON with success as true
        
        $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
        $username = trim(htmlentities($POST["username"]));
        $password = trim(htmlentities($POST["password"]));
        

        $userData = [
            "username" => $username,
            "password" => $password            
          ];

        $user = new User($db);

        if($user->checkUser($userData))
        {
           $welcome =  $username . " " . "has been deleted";
           

          
        }
        else
        {
            $username_err = "That account could not be located.";
        }      
        
     
    }
}




