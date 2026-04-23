<?php

require_once __DIR__ . '/../models/Order.php';

class OrderController {

   public static function index() {

        $status = $_GET['status'] ?? null;

        $allowedStatuses = ['delivered', 'pending', 'processing'];

        if ($status && in_array($status, $allowedStatuses)) {
            $orders = Order::getByStatus($status);
        } else {
            $orders = Order::getAll();
        }

        require __DIR__ . '/../views/orders.php';
    }
}