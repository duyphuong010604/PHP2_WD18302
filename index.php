<?php

require_once "vendor\autoload.php";
session_start();

define("ROOT_URL", "http://127.0.0.1:5001");

use App\Models\Database;
use App\Models\UserModel;

// $user = new UserModel();
// var_dump($user->checkUserExist('tinhpv10@fpt.edu.vn'));

// var_dump(password_hash("123456", 1));

use App\Core\Route;

new Route;

echo "<a href='?url=LoginController/logout'> Đăng xứt </a>";
