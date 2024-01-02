<?php
function vonglap($mang){
    foreach(
        $mang as $row
    ){
        echo $row.",";
    }
}

$Cars = ["BMW","Vovol","Mec","Lam"];
echo "Các dòng xe gồm: ".$Cars[0].",".$Cars[1].",".$Cars[2].",".$Cars[3];

// array với Key 
$Users=[
    "Peter"=>37,
    "John"=>32
];
echo "<br/>";
echo "Tên các thanh niên Peter với tuổi: ".$Users['Peter'];

//Tao array voi Function

echo "<br/>";
$newArray = array("So1","So2","So3");
echo "In ra cho anh: ";
echo vonglap($newArray);

// Hàm array_change_key_case() thay đổi tất cả các khóa trong một mảng thành chữ thường hoặc chữ hoa.
echo "<br/>";
print_r(array_change_key_case($Users,CASE_UPPER));
echo $Users['Peter'];
