<?php

class CustomerController {

    public static function index($conn) {

        $result = $conn->query("SELECT * FROM customers");

        echo "<h1>Customers</h1>";

        if ($result->num_rows === 0) {
            echo "No customers";
            return;
        }

        echo "<table border='5'>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['customer_id']) . "</td>";
            echo "<td>" . htmlspecialchars($row['first_name']) . "</td>";
            echo "<td>" . htmlspecialchars($row['email']) . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }
}