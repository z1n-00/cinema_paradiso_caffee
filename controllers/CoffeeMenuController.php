<?php
namespace Controllers;

session_start();

include("../vendor/autoload.php");
use App\Database\DB;
use App\Database\CoffeeMenu;

$db = new DB();
$connection = $db->connect();
$coffeDb = new CoffeeMenu($connection);