<?php

namespace App\Models;

use PDO;
use PDOException;

class Database
{

    private static $dbHost = 'localhost';
    private static $dbUser = 'root';
    private static $dbPassword = 'mysql';
    private static $dbPost = '3306';
    private static $dbName = 'hocphp';
    public $conn;

    public function __construct()
    {
        $this->conn = self::PDO();
    }


    public static function PdO()
    {
        try {
            $dburl = "mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName;
            $conn = new PDO($dburl, self::$dbUser, self::$dbPassword);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo 'Không thể kết nối!';
        }
    }
}