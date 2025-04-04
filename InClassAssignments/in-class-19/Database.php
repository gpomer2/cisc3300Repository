<?php

namespace App;

use PDO;
use PDOException;

class Database
{
    private $host;
    private $user;
    private $pass;
    private $name;
    private $connection;

    public function __construct($host, $user, $pass, $name)
    {
        $this->host = $host;
        $this->user = $user;
        $this->pass = $pass;
        $this->name = $name;
    }

    public function connect()
    {
        if ($this->connection === null) {
            try {
                $dsn = "mysql:host={$this->host};dbname={$this->name};charset=utf8mb4";
                $this->connection = new PDO($dsn, $this->user, $this->pass);
                $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Database connection error: " . $e->getMessage());
            }
        }

        return $this->connection;
    }
}
