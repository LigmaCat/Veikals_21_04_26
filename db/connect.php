<?php
$servername = "172.31.224.1";
$username = "store_app_210426";
$password = "password";
$dbname = "store_dev_130426";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";