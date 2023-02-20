<?php
namespace Controllers;

session_start();

include("../vendor/autoload.php");
use App\Database\DB;
use App\Database\PopularMenu;

$db = new DB();
$connection = $db->connect();
$menu = new PopularMenu($connection);

if(isset($_POST['add-submit'])){
    $title = $_POST['title'];
    $item_one = $_POST['item_one'];
    $price_one = $_POST['price_one'];
    $item_two = $_POST['item_two'];
    $price_two = $_POST['price_two'];
    $imgName = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
    $type = $_FILES['image']['type'];
    $img_size = $_FILES['image']['size'];

    if( $title == "" 
        || $item_one == ""
        || $price_one == ""
        || $imgName == "") {
            
        if($title == ""){
            $_SESSION['title'] = "Menu title is required!";
        }
        if($item_one == ""){
            $_SESSION['item_one'] = "Item name is required!";
        }
        if($price_one == ""){
            $_SESSION['price_one'] = "Price is required!";
        }
        if($imgName == ""){
            $_SESSION['image'] = "Menu image is required!";
        }
        
        header("location: ".$_SERVER["HTTP_REFERER"]);

    }else{
        unset($_SESSION['title']);
        unset($_SESSION['item_one']);
        unset($_SESSION['price_one']);
        unset($_SESSION['image']);

        $img_ex= pathinfo($imgName, PATHINFO_EXTENSION);
        $setImgName = uniqid("IMG-").".".$img_ex;
        $setImgFolder = "../assets/images/menus/popular/";
        $valid_ext = ['jpg', 'jpeg', 'png'];
        
            if(in_array($img_ex, $valid_ext)) {
                    if($img_size < 5000000) {
                        move_uploaded_file($tmp, $setImgFolder.$setImgName);
                    }else{
                        $_SESSION['image'] = "Sorry, your file is too large.";
                    }
                }else{
                    $_SESSION['image'] = "Sorry, only JPG, JPEG, PNG & GIF are allowed.";
                    header("location: ".$_SERVER["HTTP_REFERER"]);
                    exit();
                }

        if($_POST['action'] == "add"){
            $status = $menu->create($title, $item_one, $price_one, $item_two, $price_two, $setImgName);
            if($status){
                $_SESSION['status'] = "New popular menu created successfully!";
                $_SESSION['expire'] = time();
            }
            header("location: ".$_SERVER["HTTP_REFERER"]);
            exit();

        }
        
    } 
}     

if(isset($_POST['update-submit'])){
    $title = $_POST['title'];
    $item_one = $_POST['item_one'];
    $price_one = $_POST['price_one'];
    $item_two = $_POST['item_two'];
    $price_two = $_POST['price_two'];

    if( $title == "" 
        || $item_one == ""
        || $price_one == "") {
            
        if($title == ""){
            $_SESSION['title'] = "Menu title is required!";
        }
        if($item_one == ""){
            $_SESSION['item_one'] = "Item name is required!";
        }
        if($price_one == ""){
            $_SESSION['price_one'] = "Price is required!";
        }
        
        header("location: ".$_SERVER["HTTP_REFERER"]);
        exit();

    }else{

        $img_name = $_FILES['image']['name'];
        $tmp_name = $_FILES['image']['tmp_name'];
        $img_type = $_FILES['image']['type'];
        $img_size = $_FILES['image']['size'];
        $old_img = $_POST['old_image'];

        if(isset($img_name)){

            $img_ex= pathinfo($img_name, PATHINFO_EXTENSION);
            $valid_ext = ['jpg', 'jpeg', 'png'];
        
            if(in_array($img_ex, $valid_ext)) {

                    $new_img_name = uniqid("IMG-").".".$img_ex;
                    $upload_file_path = "../assets/images/menus/popular/$new_img_name";

                    $old_img_del = "../assets/images/menus/popular/$old_img";
                    if(unlink($old_img_del)){
                        move_uploaded_file($tmp_name, $upload_file_path);
                    }else{
                        move_uploaded_file($tmp_name, $upload_file_path);
                    }
                    if($img_size <= 5000000) {
                        move_uploaded_file($tmp_name, $upload_file_path);
                    }else{
                        $_SESSION['image'] = "Sorry, your file is too large.";
                        header("location: ".$_SERVER["HTTP_REFERER"]);
                        exit();
                    }

                if($_POST['action'] == "update"){
                        $id = $_POST['id'];

                            $status = $menu->update(
                                $id, $title, $item_one, $price_one, 
                                $item_two, $price_two, $new_img_name);
                                if($status){
                                    $_SESSION['status'] = "Popular menu updated successfully!";
                                    $_SESSION['expire'] = time();
                                }
                                header("location: ../views/backends/admin.php?page=menu-list");
                                exit();
                }

                    // } else {
                    //     $_SESSION['image'] = "Sorry, only JPG, JPEG, PNG & GIF are allowed.";
                    //     header("location: ".$_SERVER["HTTP_REFERER"]);
                    //     exit();
                    // }

            } else {

                if($_POST['action'] == "update"){
                    $id = $_POST['id'];
                    $status = $menu->noUpdateImage(
                    $id, $title, $item_one, $price_one, 
                    $item_two, $price_two);
                    if($status){
                        $_SESSION['status'] = "Popular menu updated successfully!";
                        $_SESSION['expire'] = time();
                    }
                    header("location: ../views/backends/admin.php?page=menu-list");
                    exit();
                }
            }
        }
    }
}
        
   
    

if(isset($_GET['action'])){
    if($_GET['action'] == "delete"){
        $id = $_GET['id'];
        $status = $menu->delete($id);
        if($status){
            $_SESSION['status'] = "Popular menu deleted successfully!";
            $_SESSION['expire'] = time();
            header("location: ".$_SERVER["HTTP_REFERER"]);
        }        
    }
}

