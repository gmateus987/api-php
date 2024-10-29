<?php

namespace App\Models;

class Database
{
    public static function getConnection()
    {
        $pdo = new \PDO("mysql:host=localhost;port=3306;dbname=api","root","");

        return $pdo;
    }
}