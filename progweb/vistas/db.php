<?php

class DB{
    private $host;
    private $db;
    private $user;
    private $password;
   

    public function __construct(){
        $this->host     = 'localhost';
        $this->db       = 'seminarios';
        $this->user     = 'root';
        $this->password = "";
      
    }

    function connect(){
    
        try{
            
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db;
           
            $pdo = new PDO($connection, $this->user, $this->password);
    
            return $pdo;

        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }   
    }
}






?>