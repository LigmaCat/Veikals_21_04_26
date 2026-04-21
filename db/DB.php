<?php

require_once __DIR__ . '/../config.php';

loadEnv(__DIR__ . '/../.env');

class DB {

    public static $pdo = null;

    public static function connect() {

        if (self::$pdo === null) {

            self::$pdo = new PDO(
                "mysql:host=" . $_ENV['DB_HOST'] . ";dbname=" . $_ENV['DB_NAME'] . ";charset=utf8",
                $_ENV['DB_USER'],
                $_ENV['DB_PASS']
            );

            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$pdo;
    }

    public static function query($sql) {
        return self::connect()->query($sql);
    }
}