<?php

namespace App\Models;

use App\Models\BaseModel;
use App\Models\Database;

class EmployeeModel extends BaseModel
{

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
}