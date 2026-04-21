<?php

require_once __DIR__ . '/../db/DB.php';
require_once __DIR__ . '/../src/controllers/CustomerController.php';

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$requestUri = rtrim($requestUri , '/') ?: '/';

if ($requestUri  === '/customers') {
    CustomerController::index();
} else {
    echo "404";
}