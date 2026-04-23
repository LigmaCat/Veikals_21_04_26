<?php

require_once __DIR__ . '/../db/DB.php';
require_once __DIR__ . '/../src/controllers/CustomerController.php';
require_once __DIR__ . '/../src/controllers/OrderController.php';


$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$requestUri = rtrim($requestUri, '/') ?: '/';

if ($requestUri === '/customers') {

    $withOrders = $_GET['with-orders'] ?? null;

    CustomerController::index($withOrders);

}

if ($requestUri === '/orders') {
    OrderController::index();
    exit;
}