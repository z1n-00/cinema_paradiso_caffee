<?php
include("vendor/autoload.php");
use App\Database\DB;
// use App\Database\Menu;
use App\Database\PopularMenu;



$db = new DB();
$connection = $db->connect();
$menuDB = new PopularMenu($connection);
$menus = $menuDB->getAll();
include("./views/frontends/header.php");
include("./views/frontends/navbar.php");
include("./views/frontends/main.php");
include("./views/frontends/about.php");
include("./views/frontends/menu.php");
include("./views/frontends/popular.php");
// include("./views/frontends/coffeeMenu.php");
// include("./views/frontends/snackMenu.php");
include("./views/frontends/review.php");
include("./views/frontends/contact.php");
include("./views/frontends/footer.php");
