<?php

namespace App\Models;

use App\Models\CRUDInterface;
use PDO;

abstract class BaseModel implements CRUDInterface
{
    private $_connection;
    protected $table;
    private $_query;

    public function __construct()
    {
        $this->_connection = new Database();
    }
    public function getAll()
    {
        $this->_query = "SELECT * FROM $this->table ";

        return $this;
    }

    public function orderBy(string $order = 'ASC')
    {
        $this->_query = $this->_query . "order by " . $order;

        return $this;
    }

    public function get()
    {
        $stmt = $this->_connection->PdO()->prepare($this->_query);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    public function limit(int $limit = 10)
    {
        $stmt = $this->_connection->PdO()->prepare($this->_query);
        $result = $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
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