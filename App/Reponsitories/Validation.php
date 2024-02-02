<?php
namespace App\Reponsitories;

trait Validation
{

    public $errors = array();
    public function emptyValidation($data)
    {
        return !empty($data) ? true : false;
    }

    public function lengthValidation(int $min, int $max, $data)
    {
        $length = 0;
        if ($this->emptyValidation($data)) {
            $length = strlen($data);
        }
        return ($length >= $min && $length <= $max) ? true : false;

    }

    public function resetErrors()
    {
        $this->errors[] = "";
    }




}