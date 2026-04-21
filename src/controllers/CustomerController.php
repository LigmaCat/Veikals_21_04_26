<?php
require_once __DIR__ . '/../../db/DB.php';

class CustomerController {

    public static function index() {

        $result = DB::query("SELECT * FROM customers");

        echo "<h1>Customers</h1>";

        foreach ($result as $row) {
            echo $row['first_name'] . " - " . $row['email'] . "<br>";
        }
    }
}