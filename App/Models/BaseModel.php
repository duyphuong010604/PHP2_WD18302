<?php

namespace App\Models;

use App\Models\CRUDInterface;

abstract class BaseModel implements CRUDInterface
{
    private $_conn;
    protected $name = 'VDP';

    public function __construct()
    {
        $this->_conn = new Database();
    }
    public function getAll()
    {
        return $this->name;
    }

    public function getOne(int $id)
    {
        return [];
    }


    public function update(int $id, array $data)
    {
        return [];
    }

    public function delete(int $id): bool
    {
        return true;
    }

    public function create(array $data)
    {
        return [];
    }


}