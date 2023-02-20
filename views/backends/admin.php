<?php
include("../../vendor/autoload.php");

session_start();

use App\Database\DB;
use App\Database\User;
use App\Database\PopularMenu;

$db =  new DB();
$connection = $db->connect();
$userDB = new User($connection);
$menuDB = new PopularMenu($connection);

if(!isset($_SESSION['auth'])){
    header("location: login.php");
}

include("header.php");
include("siderbar.php");

//Setup pages
if(isset($_GET['page'])){
    $page = $_GET['page'];

    //add addUser
    if($page == "home"){
        $users = $userDB->getAll();
        $menus = $menuDB->getAll();
        include("./home.php");
    }
    else if($page == "add-user"){
        include("./users/addUser.php");

    //add userList
    }else if($page == "user-list"){
        $users = $userDB->getAll();
        include("./users/userList.php");

    //add userEdit 
    }else if($page == "user-edit"){
        $id = $_GET['id'];
        $userData = $userDB->get($id);
        include("./users/userEdit.php");

    //add addMenu
    }else if($page == "add-menu"){
        include("./menus/popular/addPopular.php");
        // include("./menus/coffee/addCoffee.php");
        // include("./menus/snack/addSnack.php");

    //ad menuList 
    }else if($page == "menu-list"){
        $menus = $menuDB->getAll();
        include("./menus/popular/popularList.php");
        // include("./menus/coffee/coffeeList.php");
        // include("./menus/snack/snackList.php");

    //add menuEdit 
    }else if($page == "menu-edit"){
        $id = $_GET['id'];
        $menuData = $menuDB->get($id);
        include("./menus/popular/editPopular.php");
        // include("./menus/coffee/editCoffee.php");
        // include("./menus/snack/editSnack.php");
    }
}

include("footer.php");