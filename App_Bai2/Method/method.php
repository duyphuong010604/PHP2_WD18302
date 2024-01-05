<?php

function get_khoahoc()
{
    include "data.php";
    return array_values($khoahoc);
}

function tim_khoahoc($quy)
{
    include "data.php";
    return (array_key_exists($quy, $khoahoc) ? $khoahoc[$quy] : "Chưa chọn khóa học!");
}


?>