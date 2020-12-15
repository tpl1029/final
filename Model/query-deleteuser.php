<?php
    class User {
        public function __construct($db){
            $this->conn = $db;
        }

        public function checkUser($data)
        {
            // variables
            $userName = $data["username"];
            $password = $data ["password"];
            

            // Prepare a select statement
            $query = "SELECT username FROM users WHERE username = '$userName' AND Password = '$password'";
            
            $results = $this->conn->prepare($query);
            
            $results->execute();    
            
                                   
            if($results->rowCount() == 0){
                
                return false;
            } 
            
            else
            { 
                $query = "DELETE FROM users WHERE Username = '$userName' AND Password = '$password'";
    
                $results = $this->conn->prepare($query);
                
                $results->execute();
                
                return true;

               
                
            }

        }

    }
?>