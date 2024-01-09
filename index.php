<?php

require_once "vendor/autoload.php";

use Php2\Oop\Model\Database;
use Php2\Oop\Model\BaseModel;
use Php2\Oop\Controller\BaseController;

$name = new Database("hehehe");

$basemodel = new BaseModel();

var_dump($basemodel);

$basecontroller = new BaseController();

var_dump($basecontroller);