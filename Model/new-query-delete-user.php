<?php
    class User {
        public function __construct($db){
            $this->conn = $db;
        }

        public function checkUser($data)
        {
            // variables
            $userName = $data["username"];           
            

            // Prepare a select statement
            $query = "SELECT username FROM users WHERE username = '$userName'";
            
            $results = $this->conn->prepare($query);
            
            $results->execute();    
            
                                   
            if($results->rowCount() == 0){
                
                return false;
            } 
            
            else
            { 
                $query = "DELETE FROM users WHERE Username = '$userName' ";
    
                $results = $this->conn->prepare($query);
                
                $results->execute();
                
                return true;

               
                
            }

        }

    }
?>