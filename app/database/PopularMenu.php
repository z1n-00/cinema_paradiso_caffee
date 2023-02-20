<?php
namespace App\Database;
use PDO;
use PDOException;

class PopularMenu
{
    private $connect;

    public function __construct($db)
    {
        $this->connect = $db;
    }

    public function create($title, $item_one, $price_one, $item_two, $price_two, $image)
    {
        try{
            $statement = $this->connect->prepare("
                INSERT INTO popular_menu (
                    title,item_one, price_one, item_two, price_two, image
                ) VALUES (
                    :title, :item_one, :price_one, :item_two, :price_two, :image)");
            $statement->execute([
                ":title" => $title,
                ":item_one" => $item_one,
                ":price_one" => $price_one,
                ":item_two" => $item_two,
                ":price_two" => $price_two,
                ":image" => $image,
            ]);
            return $statement;
            
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    public function getAll()
    {
        try{
            $statement = $this->connect->prepare("SELECT * FROM popular_menu");
            $statement->execute();
            $menus = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $menus;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    public function get($id)
    {
        try{
            $statement = $this->connect->prepare("
            SELECT * FROM popular_menu WHERE id=:id
            ");
            $statement->execute([":id" => $id]);
            $menu = $statement->fetch();
            return $menu;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    public function update($id, $title, $item_one, $price_one, $item_two, $price_two, $image){
        try{
            $statement = $this->connect->prepare("
            UPDATE popular_menu SET 
                title = :title, 
                item_one = :item_one, 
                price_one = :price_one,  
                item_two = :item_two,
                price_two = :price_two,
                image = :image WHERE id = :id
            ");
            $statement->execute([
                ":title" => $title,
                ":item_one" => $item_one,
                ":price_one" => $price_one,
                ":item_two" => $item_two,
                ":price_two" => $price_two,
                "image" => $image,
                ":id" => $id,
            ]);
            return $statement->rowCount();
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    public function noUpdateImage($id, $title, $item_one, $price_one, $item_two, $price_two,){
        try{
            $statement = $this->connect->prepare("
            UPDATE popular_menu SET 
                title = :title, 
                item_one = :item_one, 
                price_one = :price_one,  
                item_two = :item_two,
                price_two = :price_two WHERE id = :id
            ");
            $statement->execute([
                ":title" => $title,
                ":item_one" => $item_one,
                ":price_one" => $price_one,
                ":item_two" => $item_two,
                ":price_two" => $price_two,
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
                DELETE FROM popular_menu WHERE id = :id
            ");
            $statement->execute([":id" => $id]);
            return $statement->rowCount();
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
}