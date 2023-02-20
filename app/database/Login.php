<?php
namespace App\Database;
use PDO;
use PDOException;

class Login
{
    private $connect;

    public function __construct($db)
    {
        $this->connect = $db;
    }

    public function check($email, $password)
    {
        try{
            $statement  = $this->connect->prepare("
                SELECT * FROM users WHERE email=:email
                ");
            $statement->execute([
                ":email" => $email,
            ]);
            $statement->execute();
            $result = $statement->fetch();
            // echo $result['password'];
            return password_verify($password, $result['password'])?? false;
            
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
}