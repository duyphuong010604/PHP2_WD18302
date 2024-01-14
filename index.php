<?php

require_once "vendor/autoload.php";

use Php2\Oop\Model\Database;
use Php2\Oop\Model\BaseModel;
use Php2\Oop\Controller\BaseController;
use Php2\Oop\Model\Nhanvien;
use Php2\Oop\Core\Base;
use Php2\Oop\Core\ConBase;

$ConBase = new ConBase();
$name = new Database("hehehe");
$basemodel = new BaseModel();
$basecontroller = new BaseController();
$nhanvien = new Nhanvien();
$Base = new Base();

echo $name->__construct("Vo Duy Phuong");
echo "<br/>";
var_dump($basemodel);
echo $basemodel->get_name();
echo "<br/>";
var_dump($basecontroller);
echo $basecontroller->get_controller();

echo "<br/> Buoi 5 ne!";
echo $basemodel->get_name();
echo $nhanvien->get_name();
echo $nhanvien->set_name("Phi Hao");

echo "Sai static: " . $basemodel->get_idNhanvien();

echo $basemodel::URL;

echo $nhanvien::URL;


echo $nhanvien->get_idNhanvien();

echo "<br/> ---------Buoi 6 ne!---------<br/> ";
var_dump($Base);
echo $Base->get_name();
echo $Base::Pi;
echo $Base::$_Apolo;
echo $Base->get_Apollo();
echo $Base->set_name("Phi Hao");


echo $ConBase::$_Apolo;

