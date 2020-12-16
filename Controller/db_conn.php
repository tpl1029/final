<?php

class Database {

    private $host = 'localhost';
    private $user = 'root';
    private $pass = 'root';
    private $dbname = 'fortisurerepair';

    public $conn;

    function connect(){
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->pass);
        }catch(PDOException $exception){
            echo "Connection Error:".$exception->getMessage();
        }
        return $this->conn;
    }

    public function bind($param, $value, $type = null) {
        if (is_null ($type)){
            switch(true) {
                case is_int ($value) :
                    $type = PDO::PARAM_INT;
                break;

                case is_bool ($value) :
                    $type = PDO::PARAM_BOOL;
                break;

                case is_null ($value) :
                    $type = PDO::PARAM_NULL;
                break;

                default :
                $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }
}

?>