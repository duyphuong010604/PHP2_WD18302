<?php
include "../Method/method.php";
$quy = (!empty($_GET['khoahoc']) ? $_GET['khoahoc'] : "");
$ten_khoahoc = tim_khoahoc($quy);
include "../Views/view.php";
?>