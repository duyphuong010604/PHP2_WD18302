<?php

require_once "vendor/autoload.php";

use Php2\Oop\Model\Database;

$name = new Database("hehehe");

use Php2\Oop\Model\BaseModel;

$basemodel = new BaseModel();

var_dump($basemodel);

use Php2\Oop\Controller\BaseController;

$basecontroller = new BaseController();

var_dump($basecontroller);