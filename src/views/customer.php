<h1>Customers</h1>

<a href="/customers?with-orders=full">
    <button type="button">Show orders</button>
</a>

<ul>
    <?php foreach ($customers as $customer): ?>
        <li>
            <strong>
                <?= htmlspecialchars($customer['first_name']) ?>
            </strong>

<!-- ORDERS -->
<?php if (!empty($customer['orders'])): ?>
    <ul>
        <?php foreach ($customer['orders'] as $order): ?>
            <li>
                <strong>Date:</strong>
                <?= htmlspecialchars($order['date'] ?? '') ?><br>

                <strong>Arrived date:</strong>
                <?= htmlspecialchars($order['arrived_date'] ?? '-') ?><br>

                <strong>Status:</strong>
                <?= htmlspecialchars($order['status'] ?? '') ?><br>

                <strong>Comments:</strong>
                <?= htmlspecialchars($order['comments'] ?? '') ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

        </li>
    <?php endforeach; ?>
</ul>