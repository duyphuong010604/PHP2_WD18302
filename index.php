<?php

require_once "vendor\autoload.php";

define("ROOT_URL", "127.0.0.1:3306");

use App\Core\Route;
use App\Models\Database;

$database = new Database();

new Route;

