<?php
require __DIR__ . '../../vendor/autoload.php';
include '../app/Core/Route.php';

use app\Core\Env;
$env = Env::load();

//use app\Core\Route;

//$route = new Route();

use app\Core\Database;

$conn = Database::getConexao();