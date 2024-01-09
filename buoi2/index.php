<?php
use papa\Core\Database;

require_once "vendor/autoload.php";

$name = new Database();
echo $name->get_name();

