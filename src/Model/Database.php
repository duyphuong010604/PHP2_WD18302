<?php

namespace Php2\Oop\Model;

class Database
{
    private $_nameDatabase;
    private $_username;
    private $_password;
    private $_hostDatabase;
    var $name;
    public function __construct($name)
    {
        echo "Hello man " . $name . "";
    }
}