<?php

namespace App\Models;

use App\Models\BaseModel;


class EmployeeModel extends BaseModel
{

    protected $table = 'users';

    public function getAllUser()
    {
        return $this->getAll()->get();
    }
}