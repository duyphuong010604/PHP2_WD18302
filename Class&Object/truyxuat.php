<?php

class A
{
    private $val;
    private $name = "Võ Duy Phương";
    // function __construct($val)
    // {
    //     $this->val = $val;
    // }
    function getClosure()
    {
        //returns closure bound to this object and scope
        return function () {
            return $this->val;
        };
    }


}

// $ob1 = new A(1);
// $ob2 = new A(2);

// $cl = $ob1->getClosure();
// echo $cl(), "\n";
// $cl = $cl->bindTo($ob2);
// echo $cl(), "\n";
$getA_name = function () {
    return $this->name;
};
$getName = $getA_name->bindTo(new A, "A");
echo $getName(), "\n";

