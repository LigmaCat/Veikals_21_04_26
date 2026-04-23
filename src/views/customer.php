<h1>Customers</h1>

<?php $showOrders = ($_GET['with-orders'] ?? null) === 'full'; ?>

<a href="/customers<?= $showOrders ? '' : '?with-orders=full' ?>">
    <button type="button">
        <?= $showOrders ? 'Hide orders' : 'Show orders' ?>
    </button>
</a>

<ul>
    <?php foreach ($customers as $customer): ?>
        <li>
<div style="margin-bottom: 10px;">

    <strong style="font-size: 18px;">
        <?= htmlspecialchars($customer['first_name']) ?>
        <?= htmlspecialchars($customer['last_name'] ?? '') ?>
    </strong><br>

    <strong>Email:</strong>
    <?= htmlspecialchars($customer['email']) ?><br>

    <?php if (!empty($customer['phone'])): ?>
        <strong>Phone:</strong>
        <?= htmlspecialchars($customer['phone']) ?><br>
    <?php endif; ?>

</div>

<!-- ORDERS -->
<?php if ($showOrders && !empty($customer['orders'])): ?>
    <ul>
        <?php foreach ($customer['orders'] as $index => $order): ?>
            <li style="margin-bottom: 15px;">

                <strong style="font-size: 16px;">
                    Order <?= $index + 1 ?>
                </strong>
                <hr>

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