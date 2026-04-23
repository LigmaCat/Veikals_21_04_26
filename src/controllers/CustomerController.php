<?php

require_once __DIR__ . '/../../db/DB.php';
require_once __DIR__ . '/../models/Customer.php';

class CustomerController {

    public static function index($withOrders = null) {

        $customers = Customer::getAllWithOrders();

        require __DIR__ . '/../views/customer.php';
    }
}