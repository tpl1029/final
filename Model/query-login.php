<?php

class Login {
    public function __construct($db){
        $this->conn = $db;
    }

    public function loginUser($data)
        {
            // variables
            $userName = $data["username"];
            $password = $data ["password"];
            

            $hashed_query = "SELECT UserName, Password FROM users WHERE UserName = '$userName' AND Password = '$password' ";

            $results = $this->conn->prepare($hashed_query);
            
            $results->execute();
                       
            $row = $results->fetch(PDO::FETCH_ASSOC);
    
            if($results->rowCount() == 1){
                $hashed_query = "UPDATE users SET Status = 'A' WHERE UserName = '$userName' AND Password = '$password'";

                $results = $this->conn->prepare($hashed_query);
                
                $results->execute();
                           
                $row = $results->fetch(PDO::FETCH_ASSOC);
                            
                // Store data in session variables
                $_SESSION["loggedin"] = "A";
                $_SESSION["username"] = $userName;                            
                            

            }
            
            else{
                // Display an error message if username doesn't exist
                $_SESSION["loggedin"] = false;
                $username_err = " That account was not found";
                }
                
            } 
}

// Close connection



?>