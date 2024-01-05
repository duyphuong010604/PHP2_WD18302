<?php
include "../Model/model.php";

if ((!empty($_POST['email']) ? $email = $_POST['email'] : $email = ""))
    ;

$nhanvien = get_nhanvien($email);

include "../Views/view.php";
