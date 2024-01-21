<?php
require_once __DIR__."./vendor/autoload.php";

use Php2\Oop\Core\Route as Router;

$router = new Router();

$router->register(
    '/',
    function (){
        echo "Home";
    }
);




//echo $router->register('/',[\Php2\Oop\Home::class,'index']);
//echo $router->register('/',[\Php2\Oop\Incoices::class,'index']);
//echo $router->register('/invoices/create',[\Php2\Oop\Incoices::class,'create']);