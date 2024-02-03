<?php
session_start();
require_once "vendor\autoload.php";

define("ROOT_URL", "http://127.0.0.1:3306");


use App\Core\Route;

new Route;
//$this->Content($email, $name, $passwordNew, $username);
// use App\Helpper\Mailer;

// $mailer = new Mailer("voduyphuong13@gmail.com", 'Hello', "123445", "akaka");
// $mailer->information = [
//     'username' => 'John Doe',
//     'password' => "124444",  // Your name here
// ];
// extract($mailer->information);
// var_dump($mailer->information);
// echo $username;

