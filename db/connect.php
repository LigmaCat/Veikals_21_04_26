<?php
$servername = "172.31.224.1";
$username = "store_app_210426";
$password = "password";
$dbname = "store_dev_130426";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($path === '/customers') {

    $result = $conn->query("SELECT * FROM customers");

    echo "<h1>Customers</h1>";

    while ($row = $result->fetch_assoc()) {
        echo $row['first_name'] . " - " . $row['email'] . "<br>";
    }

} else {
    echo "404";
}

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}