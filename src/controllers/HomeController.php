<?php

require_once __DIR__ . '/../../db/DB.php';

class HomeController {

    public static function index() {

        // count customers
        $customers = DB::query("SELECT COUNT(*) as count FROM customers")
            ->fetch()['count'];

        // count orders
        $orders = DB::query("SELECT COUNT(*) as count FROM orders")
            ->fetch()['count'];

        require __DIR__ . '/../views/home.php';
    }
}