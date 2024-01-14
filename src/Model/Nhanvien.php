<?php
namespace Php2\Oop\Model;

use Php2\Oop\Model\connect;

class Nhanvien
{

    public $email;
    public $ho;
    public $ten;
    public $password;

    public function get_all()
    {
        $conn = new connect();
        $sql = "SELECT * FROM `nhanvien`";
        $result = $conn->pdo_query($sql);
        return $result;
    }

    public function insert($ho, $ten, $email, $password)
    {
        $conn = new connect();
        $sql = "INSERT INTO `nhanvien`(`ho`, `ten`, `email`, `password`) VALUES ('$ho','$ten','$email','$password')";
        $result = $conn->pdo_execute($sql);
        return $result;
    }

}