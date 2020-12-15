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
            $update_username = $data["update_username"];
            $update_password = $data ["update_password"];
            $update_email = $data["update_email"];           
            
            
            // Prepare a select statement
            $query = "SELECT UserName FROM users WHERE UserName = '$userName' AND Password = '$password'";
            
            $results = $this->conn->prepare($query);
            
            $results->execute();     
                        
                       
            if($results->rowCount() == 0){
                
                return false;
            } 
            
            else
            { 
                // Upate a username
                if(empty(trim($_POST["update_password"]))&&empty(trim($_POST["update_email"]))){

                $query = "UPDATE users SET UserName = '$update_username' WHERE UserName = '$userName' AND Password = '$password'";
    
                $results = $this->conn->prepare($query);
                
                $results->execute();
                
                if($results->rowCount() == 0){
                    $update_username_err = "That username has already been taken. Please choose a different one!";
                    echo $update_username_err;
                } else{ 
                    return true;}

                }
                
                // Update a Password
                elseif(empty(trim($_POST["update_username"]))&&empty(trim($_POST["update_email"]))){

                    $query = "UPDATE users SET Password = '$update_password' WHERE UserName = '$userName' AND Password = '$password'";
        
                    $results = $this->conn->prepare($query);
                    
                    $results->execute();
                    
                    return true;
    
                    }

                // Update an Email
                elseif(empty(trim($_POST["update_username"]))&&empty(trim($_POST["update_password"]))){

                    $query = "UPDATE users SET Email = '$update_email' WHERE UserName = '$userName' AND Password = '$password'";
            
                    $results = $this->conn->prepare($query);
                        
                    $results->execute();
                        
                    return true;
        
                        }

                // Update a Username and Password
                    elseif(empty(trim($_POST["update_email"]))){

                        $query = "UPDATE users SET UserName = '$update_username', Password = '$update_password' WHERE UserName = '$userName' AND Password = '$password'";
                
                        $results = $this->conn->prepare($query);
                            
                        $results->execute();
                            
                        if($results->rowCount() == 0){
                            $update_username_err = "That username has already been taken. Please choose a different one!";
                            echo $update_username_err;
            
                            }else{ 
                                return true;}
                        }
                // Update a Username and Email
                        elseif(empty(trim($_POST["update_password"]))){

                            $query = "UPDATE users SET UserName = '$update_username', Email = '$update_email' WHERE UserName = '$userName' AND Password = '$password'";
                    
                            $results = $this->conn->prepare($query);
                                
                            $results->execute();
                                
                            if($results->rowCount() == 0){
                                $update_username_err = "That username has already been taken. Please choose a different one!";
                                echo $update_username_err;
                
                                }else{ 
                                    return true;}
                            }
                // Update a Password and Email
                        elseif(empty(trim($_POST["update_username"]))){

                            $query = "UPDATE users SET Password = '$update_password', Email = '$update_email' WHERE UserName = '$userName' AND Password = '$password'";
                        
                            $results = $this->conn->prepare($query);
                                    
                            $results->execute();
                                    
                            return true;
                    
                            }
                // Update Username, Password, and Email
                        else{

                            $query = "UPDATE users SET UserName = '$update_username', Password = '$update_password', Email = '$update_email' WHERE UserName = '$userName' AND Password = '$password'";
                                
                            $results = $this->conn->prepare($query);
                                            
                            $results->execute();
                                            
                            if($results->rowCount() == 0){
                                $update_username_err = "That username has already been taken. Please choose a different one!";
                                echo $update_username_err;
                            
                            }else{ 
                                return true;}
                        }
                            
                
            }

        }

    }
?>