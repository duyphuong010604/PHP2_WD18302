<?php
//Truy xuất biến ngoài object phạm vi private
/*
binto(newThis, newScope);
newThis : đối tượng mà anonymous function được ràng buộc để closure không bị ràng buộc 
newScope : phạm vi lớp mà closure được liên kết

*/
class C
{
    private $x = "Hi";
}

//First closure: $ getC định nghĩa method truy xuất property x ngoài class C
$getC = function () {
    return $this->x;
};


//Second closure: $ getX là nhân bản của $ getC 
$getX = $getC->bindTo(new C, 'C');

echo $getX();

//php 7 
echo $getC->call(new C);
