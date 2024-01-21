<?php
require_once __DIR__ . "./vendor/autoload.php";

use Php2\Oop\Core\Route as Router;

$router = new Router();


echo "<pre>";
var_dump(
    $router->register(
        '/',
        function () {
            echo "Home";
        }
    )
);

var_dump($router->register('/', [\Php2\Oop\Home::class, 'index']));
var_dump($router->register('/', [\Php2\Oop\Incoices::class, 'index']));
var_dump($router->register('/invoices/create', [\Php2\Oop\Incoices::class, 'create']));

echo '</pre>';

echo "<h1>Biểu thức chính quy đặt trong thư mục reponsitories</h1>";