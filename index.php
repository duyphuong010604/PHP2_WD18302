<?php

require_once "vendor\autoload.php";

define("ROOT_URL", "127.0.0.1:5030");

use App\Core\Route;
use App\Models\Database;
use App\Models\EmployeeModel;

$database = new Database();

new Route;
$userModel = new EmployeeModel();

