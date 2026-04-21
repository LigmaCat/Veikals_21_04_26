<?php

class DB {

    public static $pdo = null;

    public static function connect() {

        if (self::$pdo === null) {
            self::$pdo = new PDO(
                "mysql:host=172.31.224.1;dbname=store_dev_130426;charset=utf8",
                "store_app_210426",
                "password"
            );

            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return self::$pdo;
    }

    public static function query($sqlQuery) {

        $pdo = self::connect();
        $stmt = $pdo->query($sqlQuery);

        return $stmt;
    }
}