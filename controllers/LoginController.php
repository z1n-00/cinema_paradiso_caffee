<?php
namespace Controllers;

session_start();

include("../vendor/autoload.php");
use App\Database\DB;
use App\Database\Login;

$db = new DB();
$connection = $db->connect();
$login = new Login($connection);

if(isset($_POST['email'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    if($email == "" || $password == ""){
        if($email == "") {
            $_SESSION['email'] = "Email is required!";
        }
        if($password == ""){
            $_SESSION['password'] = "Password is required!";
        }
        header("location: ".$_SERVER["HTTP_REFERER"]);

    }else{
        unset($_SESSION['email']);
        unset($_SESSION['password']);

        $status = $login->check($email, $password);
        if($status){
            $_SESSION['auth'] = true;
        }else{
            $_SESSION['status'] = "Incorrect Email or Password!";
            $_SESSION['expire'] = time();
        }
        header("location: ../views/backends/admin.php?page=home");
    }
}
if(isset($_GET['action'])){
    if($_GET['action'] == "logout"){
        unset($_SESSION['auth']);
        header("location: ../views/backends/login.php");
        exit();
    }
}
