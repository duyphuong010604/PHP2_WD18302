<?php
namespace Php2\Oop\Reponsitories;

abstract class ModelAbstract
{
    protected $model;
    public function getModel()
    {
        return $this->model;
    }
    abstract public function getTable();


}