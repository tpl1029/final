<?php
$welcome = $username = "";
$username_err ="";
 
// Processing form data when form is submitted
if(isset($_POST['submit'])){
    require './Model/query-delete-user.php';   
  
        
        $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
        $username = trim(htmlentities($POST["username"]));        
        

        $userData = [
            "username" => $username                       
          ];

        $user = new User($db);

        if($user->checkUser($userData))
        {           
           $_POST = '';
           unset($_POST);
           echo "<script>   history.pushState({}, '', ''); </script>"; 
           header("Location:./user_display.php");
        }
        else
        {
            $username_err = "That account could not be deleted.";
        }      
        
     
    }





