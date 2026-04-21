<?php

require_once __DIR__ . '/../../db/DB.php';

class CustomerController {

    public static function index() {

        $result = DB::query("SELECT * FROM customers");

        $customers = [];

        foreach ($result as $row) {
            $customers[] = $row;
        }

        require __DIR__ . '/../views/customer.php';
    }
}