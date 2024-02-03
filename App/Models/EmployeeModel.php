<?php

namespace App\Models;

use App\Models\BaseModel;


class EmployeeModel extends BaseModel
{
    public $tableName = "employees";

    public $table = "employees";
    public $selectField = 'username, id, password, email, first_name';
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllUser()
    {
        return $this->getAll()->get();
    }

    public function checkUserExistEmail($username, $email)
    {
        return $this->select($this->selectField)->where('username', ' = ', $username)->whereLike('email', $email)->first();
    }

    public function checkUserExist($username, $password)
    {
        return $this->select($this->selectField)->where('username', ' = ', $username)->whereLike('password', $password)->first();
    }

    public function getAllWithPaginate(int $limit = 10, int $offset = 0)
    {
        // return $this->select()->where('email', '=', $email)->first();
    }

    public function registerUser($data)
    {
        // $tableName = $this->tableName;
        $user = $this->insert($this->tableName, $data);
    }

    public function create($data)
    {
        var_dump($this->tableName);
    }

    public function update($id, $data, $condition = '')
    {
        return $this->updateData($id, $this->table, $data, $condition);
    }
}