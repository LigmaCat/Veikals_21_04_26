<h1>Customers</h1>

<table border="1" style="width:80%; font-size:18px; border-collapse: collapse;">
    <tr style="background:#f2f2f2;">
        <th style="padding:10px;">ID</th>
        <th style="padding:10px;">Name</th>
        <th style="padding:10px;">Email</th>
    </tr>

    <?php foreach ($customers as $row): ?>
        <tr>
            <td style="padding:10px;">
                <?= htmlspecialchars($row['customer_id']) ?>
            </td>
            <td style="padding:10px;">
                <?= htmlspecialchars($row['first_name']) ?>
            </td>
            <td style="padding:10px;">
                <?= htmlspecialchars($row['email']) ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>