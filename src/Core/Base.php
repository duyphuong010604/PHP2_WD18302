<?php
namespace Php2\Oop\Core;

class Base
{

    const Pi = 3.14;
    private $_name = "NNLT PHP";
    public static $_Apolo = "Apolo11";
    public function get_name()
    {
        return $this->_name;
    }

    public static function get_Apollo()
    {
        return self::$_Apolo;
    }

    final public function set_name($name)
    {
        return $this->_name = $name;
    }


}