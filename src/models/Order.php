<?php

require_once __DIR__ . '/../../db/DB.php';

class Order {

    public static function getAll() {

        $result = DB::query("
            SELECT *
            FROM orders
        ");

        $orders = [];

        foreach ($result as $row) {
            $orders[] = [
                'order_id' => $row['order_id'],
                'customer_id' => $row['customer_id'],
                'date' => $row['date'],
                'arrived_date' => $row['arrived_date'],
                'status' => $row['statuss'],
                'comments' => $row['comments']
            ];
        }

        return $orders;
    }
}