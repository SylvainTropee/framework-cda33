<?php

namespace App\database;

use PDO;

class Database
{
    private PDO $pdo;
    private static ?Database $instance = null;

    private function __construct()
    {

        $dsn = 'mysql:host=localhost;dbname=legumes';

        $this->pdo = new PDO($dsn, 'root', '', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        ]);
    }

//    public function __destruct()
//    {
//        unset($this->pdo);
//    }

    public static function getInstance(): Database
    {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }


    public function find(string $sql, array $params = []): array
    {
        $query = $this->pdo->prepare($sql);
        $query->execute($params);
        return $query->fetchAll();
    }

    public function findOne(string $sql, array $params = []): array
    {
        $query = $this->pdo->prepare($sql);
        $query->execute($params);
        return $query->fetch();
    }

    public function execute(string $sql, array $params = []): void
    {
        $query = $this->pdo->prepare($sql);
        $query->execute($params);
    }
}
