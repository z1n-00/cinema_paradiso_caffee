<?php
namespace App\Database;
use PDO;
use PDOException;

class DB
{
    private $dbhost = "localhost";
    private $dbname = "cinema_paradiso";
    private $dbuser = "root";
    private $dbpass = "";
    private $db;
    

    public function connect()
    {
       try{
        $this->db = new PDO(
            "mysql:host=$this->dbhost;dbname=$this->dbname",
            $this->dbuser,
            $this->dbpass,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ]
        );
            return $this->db;
       }catch(PDOException $e){
            return $e->getMessage();
       }
    }
}