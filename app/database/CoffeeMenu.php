<?php
namespace App\Database;
use PDOException;

class CoffeeMenu{

    private $coffee;

    public function __construct($db)
    {
        $this->coffee = $db;
    }

    public function create($title, $price, $text_one, $text_two, $image)
    {
        try{
            $statement = $this->coffee->prepare("
                INSERT INTO coffee_menu (
                    title, price, text_one, text_two, image
                ) VALUES (
                    :title, :price, :text_one, :text_two, :image)");
            $statement->execute([
                    ":title" => $title,
                    ":price" => $price,
                    ":text_one" => $text_one,
                    ":text_two" => $text_two,
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
            $statement = $this->coffee->prepare("
                SELECT * FROM coffee_menu
                ");
            $statement->execute();
            $coffeeMenu = $statement->fetchAll();
            return $coffeeMenu;
        }catch(PDOException $e)
        {
            return $e->getMessage();
        }
    }

    public function get($id)
    {
        try{
            $statement = $this->coffee->prepare("
                SELECT * FROM coffee_menu WHERE id = :id
                ");
            $statement->execute([ ":id" => $id ]);
            $statement->fetch();
            return $statement;
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }

    public function update($id, $title, $price, $text_one, $text_two, $image)
    {
        try{
            $statement = $this->coffee->prepare("
                UPDATE coffee_menu SET
                    title = :title, 
                    price = :price, 
                    text_one = :text_one, 
                    text_two = :text_two, 
                    image = :image WHERE id = :id
                ");
            $statement->execute([
                    ":title" => $title,
                    ":price" => $price,
                    ":text_one" => $text_one,
                    ":text_two" => $text_two,
                    ":image" => $image,
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
            $statement = $this->coffee->prepare("
                DELETE FROM coffee_menu WHERE id = :id
                ");
            $statement->execute([":id" => $id]);
            return $statement->rowCount();
        }catch(PDOException $e){
            return $e->getMessage();
        }
    }
}