<?php
namespace Php2\Oop\Model;

use Php2\Oop\Model\AbstractBase;
use Php2\Oop\Model\InterfaceBase;

class BaseModel extends AbstractBase implements InterfaceBase
{
    public function get_info()
    {
        return "Nhan vien: " . $this->name . "," . $this->age . "tuoi!";
    }

    public function get_all()
    {
        echo "Lay ra toan bo danh sach!";
    }
    public function get_list($id)
    {
        echo "Lay ra Nhan vien co id: " . $id;
    }
    public function update($id)
    {
        echo "Update thong tin nhan vien co id: " . $id;
    }
    public function delete($id)
    {
        echo "Xoa nhan vien!";
    }
    public function insert($name, $age)
    {
        echo "Them mot nhan vien moi " . $name . "-" . $age;
    }


}