<?php
namespace Php2\Oop\Model;

use Php2\Oop\Reponsitories\ModelInterface;
use Php2\Oop\Reponsitories\ModelAbstract;

class BaseModel extends ModelAbstract implements ModelInterface
{
    public function get_all()
    {

    }
    public function getTable()
    {

    }
    // {
//     const URL = "121313131";
//     private $_diachi = "Dao Huu Canh/ Chau Phu/ An Giang";
//     protected static $_idNhanvien = "PC06941";
//     protected static $_sttNhanvien = 1;
//     protected $_sogiolam = 10;
//     public $name = "Võ Duy Phương";

    //     public function get_name()
//     {
//         return $this->name;
//     }

    //     public function get_diachi()
//     {
//         return $this->_diachi;
//     }

    //     public function get_idNhanvien()
//     {
//         return self::$_idNhanvien;
//     }

    //     public function set_name($nameNew)
//     {
//         return $this->name = $nameNew;
//     }

    //     public function get_idNhanvien1()
//     {
//         return static::$_idNhanvien;
//     }
// }
}