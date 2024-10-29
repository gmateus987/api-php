<?php

namespace App\Models;

class Database
{
    public static function getConnection()
    {
        $pdo = new \PDO($_ENV['DB_CONNECTION'] . ":host=" . $_ENV['DB_HOST'] . ";port=" . $_ENV['DB_PORT'] . ";dbname=" . $_ENV['DB_DATABASE'],$_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD']);

        return $pdo;
    }
}