<?php
function get_list_nhanvien()
{
    include "connect.php";
    $sql = 'SELECT * FROM nhanvien';
    $result = mysqli_query($conn, $sql);
    return $result;
}