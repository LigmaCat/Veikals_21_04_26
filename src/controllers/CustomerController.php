<?php

require_once __DIR__ . '/../../db/DB.php';

class CustomerController {

    public static function index($withOrders = null) {

        $result = DB::query("
    SELECT *
    FROM customers c
    LEFT JOIN orders o ON c.customer_id = o.customer_id
");

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

    // order exists check
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

$customers = array_values($customers);

        // 3. ielādē view
        require __DIR__ . '/../views/customer.php';
    }
}