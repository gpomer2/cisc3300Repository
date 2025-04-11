<?php

class Database
{
    private static $host = 'localhost';
    private static $db_name = 'starling_curios_db';
    private static $username = 'root';
    private static $password = '';
    private static $conn = null;

    public static function connect()
    {
        if (self::$conn == null) {
            try {
                self::$conn = new PDO(
                    "mysql:host=" . self::$host . ";dbname=" . self::$db_name,
                    self::$username,
                    self::$password
                );
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
            }
        }
        return self::$conn;
    }
}
