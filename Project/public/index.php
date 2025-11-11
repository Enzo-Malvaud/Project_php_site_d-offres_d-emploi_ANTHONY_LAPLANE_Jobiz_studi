<?php
// Charger l'autoload
require_once __DIR__ . "/../vendor/autoload.php";

// On définit un constante pour avoir le chemin racine de l'app
define("APP_ROOT", dirname(__DIR__));
define("APP_ENV", ".env.local");

use App\Routing\Router;

$router = new Router();
$router->handleResquest($_SERVER["REQUEST_URI"]);


use App\Db\Mysql;

$mysql = Mysql::getInstance();



/*use App\Controller\PageController;

$pageController = new PageController();
$pageController->home();*/
