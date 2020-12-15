<?php

class Logout {
    public function __construct($db){
        $this->conn = $db;
    }

    public function logoutUser($data)
        {
            // variables
                $userName = $data["username"];        

                $query = "UPDATE users SET Status = 'I' WHERE UserName = '$userName'";

                $results = $this->conn->prepare($query);
                
                $results->execute();
                           
                $row = $results->fetch(PDO::FETCH_ASSOC);
                            
                session_unset();
                session_destroy();
            
                header("Location:../login.php");                                          
                            

            }
            
            
}

// Close connection



?>