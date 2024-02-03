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

    public function emailValidation($data)
    {
        return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $data)) ? FALSE : TRUE;
    }

    public function resetErrors()
    {
        $this->errors[] = "";
    }




}