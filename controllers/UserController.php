<?php
namespace Controllers;

session_start();

include("../vendor/autoload.php");
use App\Database\DB;
use App\Database\User;

$db = new DB();
$connection = $db->connect();
$user = new User($connection);

if(isset($_POST['name'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($name == "" || $email == "" || $password == "") {
        if($name == ""){
            $_SESSION['name'] = "Name is required!";
        }
        if($email == ""){
            $_SESSION['email'] = "Email is required!";
        }
        if($password == ""){
            $_SESSION['password'] = "Password is required!";
        }
        header("location: ".$_SERVER["HTTP_REFERER"]);
    }else{
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        
        if($_POST['action'] == "add"){
            $pass_enc = password_hash($password, PASSWORD_BCRYPT);
            // echo $pass_enc;

            $status = $user->create($name, $email, $pass_enc);
            if($status){
            $_SESSION['status'] = "New user created successfully!";
            $_SESSION['expire'] = time();
            }
            header("location: ".$_SERVER["HTTP_REFERER"]);
            
        }else if($_POST['action'] == "update"){
            $pass_enc = password_hash($password, PASSWORD_BCRYPT);
            $id = $_POST['id'];
            $status = $user->update($id, $name, $email, $pass_enc);
            if($status){
                $_SESSION['status'] = "User updated successfully!";
                $_SESSION['expire'] = time();
            }
            header("location: ../views/backends/admin.php?page=user-list");
            exit();
        }
    }
}

if(isset($_GET['action'])){
    if($_GET['action'] == "delete"){
        $id = $_GET['id'];
        $status = $user->delete($id);
        if($status){
            $_SESSION['status'] = "User deleted successfully!";
            $_SESSION['expire'] = time();
            header("location: ".$_SERVER["HTTP_REFERER"]);
        }        
    }
}