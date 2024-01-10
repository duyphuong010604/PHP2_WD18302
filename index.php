<?php

require_once "vendor/autoload.php";

use Php2\Oop\Model\Database;
use Php2\Oop\Model\BaseModel;
use Php2\Oop\Controller\BaseController;

$name = new Database("hehehe");
$basemodel = new BaseModel();
$basecontroller = new BaseController();


echo $name->__construct("Vo Duy Phuong");
echo "<br/>";
var_dump($basemodel);
echo $basemodel->get_name();
echo "<br/>";
var_dump($basecontroller);
echo $basecontroller->get_controller();