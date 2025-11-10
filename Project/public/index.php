<?php
// Charger l'autoload
require_once __DIR__ . "/../vendor/autoload.php";

// On définit un constante pour avoir le chemin racine de l'app
define("APP_ROOT", dirname(__DIR__));



use App\Controller\PageController;

$pageController = new PageController();
$pageController->home();
