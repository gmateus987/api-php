<?php

require_once __DIR__ ."/vendor/autoload.php";
require_once __DIR__ ."/src/routes/main.php";
require_once __DIR__ ."/constants.php";

use App\Core\Core;
use App\Http\Route;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ ."/");
$dotenv->load();

Core::dispatch(Route::routes());