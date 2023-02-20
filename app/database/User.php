<?php
namespace App\Database;
use PDO;
use PDOException;

class User
{
    private $connect;

    public function __construct($db)
    {
        $this->connect = $db;
    }

    public function create($name, $email, $password)
    {   
        try{
            $statement = $this->connect->prepare("
            INSERT INTO users (
            name, email, password
            ) VALUES (
                :name, :email, :password)");
            $statement->execute([
            ":name" => $name,
            ":email" => $email,
            ":password" => $password
            ]);
            return $statement;
        
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    public function getAll()
    {
        try{
            $statement = $this->connect->prepare("
            SELECT * FROM users");
            $statement->execute();
            $users = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $users;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    public function get($id){
        try{
            $statement = $this->connect->prepare("
            SELECT * FROM users WHERE id=:id");
            $statement->execute([":id" => $id]);
            $user = $statement->fetch(PDO::FETCH_ASSOC);
            return $user;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    public function update($id, $name, $email, $password)
    {
        try{
            $statement = $this->connect->prepare("
            UPDATE users SET name=:name, email=:email, password=:password WHERE id=:id");
            $statement->execute([
                ":name" => $name,
                ":email" => $email,
                ":password" => $password,
                ":id" => $id,
            ]);
            return $statement->rowCount();
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    public function delete($id)
    {
        try{
            $statement = $this->connect->prepare("
                DELETE FROM users WHERE id=:id
            ");
            $statement->execute([":id"=>$id]);
            return $statement->rowCount();
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
}