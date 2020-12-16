<?php

class View{

    public function __construct($db){
        $this->conn = $db;
    }

    function viewRead(){
        // selects all products from db
        $query = "SELECT * FROM users";

        // prepares query statement
        $stmt = $this->conn->prepare($query);

        //execute query
        $stmt->execute();

        // return values
        return $stmt;
    }
}




?>