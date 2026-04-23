<?php

require_once __DIR__ . '/../../db/DB.php';
require_once __DIR__ . '/../models/Customer.php';

class CustomerController {

public static function index() {

    $withOrders = $_GET['with-orders'] ?? null;

    if ($withOrders === 'full') {
        $customers = Customer::getAllWithOrders();
    } else {
        $customers = Customer::getAll(); // <-- simple version without orders
    }

    require __DIR__ . '/../views/customer.php';
}


}