<?php 


Trait Database {
    private $hostname = 'localhost';
    private $database = 'obsidian';
    private $username = 'root';
    private $password = '';

    private function connect(){
        $string = 'mysql:hostname='.$this->hostname.';dbname='.$this->database.';';

        $conn = new PDO($string, $this->username,$this->password);
        return $conn;
    }

    public function query($query, $data = []){  
        
        $con = $this->connect();
        $stmt = $con->prepare($query);
        $check = $stmt->execute($data);

        if($check){
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            if(is_array($check) && count($check) > 0){
                return $result;
            }
        }

        return false;   

    }

    public function get_row($query, $data = []){  
        
        $con = $this->connect();
        $stmt = $con->prepare($query);
        $check = $stmt->execute($data);

        if($check){
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            
            if(is_array($check) && count($check) > 0){
                return $result[0];
            }
        }

        return false;   

    }
}

