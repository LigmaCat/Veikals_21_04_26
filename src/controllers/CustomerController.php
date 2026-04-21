<?php

require_once __DIR__ . '/../../db/DB.php';

class CustomerController {

    public static function index() {

        $result = DB::query("SELECT * FROM customers");

        echo "<h1>Customers</h1>";

        echo "<table border='1' style='width:80%; font-size:18px; border-collapse: collapse;'>";

        echo "<tr style='background:#f2f2f2;'>
                <th style='padding:10px;'>ID</th>
                <th style='padding:10px;'>Name</th>
                <th style='padding:10px;'>Email</th>
              </tr>";

        foreach ($result as $row) {
            echo "<tr>";
            echo "<td style='padding:10px;'>" . htmlspecialchars($row['customer_id']) . "</td>";
            echo "<td style='padding:10px;'>" . htmlspecialchars($row['first_name']) . "</td>";
            echo "<td style='padding:10px;'>" . htmlspecialchars($row['email']) . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }
}