<?php

require_once __DIR__ . '/../../db/DB.php';

class Customer {

    public static function getAllWithOrders() {

        $result = DB::query("
            SELECT *
            FROM customers c
            LEFT JOIN orders o ON c.customer_id = o.customer_id
        ");

        $customers = [];

        foreach ($result as $row) {

            $cid = $row['customer_id'];

            if (!isset($customers[$cid])) {
                $customers[$cid] = [
                    'customer_id' => $row['customer_id'],
                    'first_name' => $row['first_name'],
                    'email' => $row['email'],
                    'orders' => []
                ];
            }

            if (!empty($row['order_id'])) {
                $customers[$cid]['orders'][] = [
                    'order_id' => $row['order_id'],
                    'date' => $row['date'],
                    'arrived_date' => $row['arrived_date'],
                    'statuss' => $row['statuss'],
                    'comments' => $row['comments']
                ];
            }
        }

        return array_values($customers);
    }

    public static function getAll() {

    $result = DB::query("SELECT * FROM customers");

    $customers = [];

    foreach ($result as $row) {
        $customers[] = [
            'customer_id' => $row['customer_id'],
            'first_name' => $row['first_name'],
            'last_name' => $row['last_name'] ?? '',
            'email' => $row['email'],
            'points' => $row['points'] ?? 0,
            'orders' => [] // keep structure consistent
        ];
    }

    return $customers;
}
}