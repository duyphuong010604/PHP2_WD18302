<?php
namespace Php2\Oop\Model;

interface InterfaceBase
{
    public function get_all();
    public function get_list($id);
    public function update($id);
    public function delete($id);
    public function insert($name, $age);

}