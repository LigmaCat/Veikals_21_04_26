<h1>Orders</h1>

<a href="/orders">
    <button>All</button>
</a>

<a href="/orders?status=pending">
    <button>Pending</button>
</a>

<a href="/orders?status=processing">
    <button>Processing</button>
</a>

<a href="/orders?status=delivered">
    <button>Delivered</button>
</a>

<ul>
    <?php foreach ($orders as $index => $order): ?>
        <li style="margin-bottom: 15px;">

            <strong>
                Order <?= $index + 1 ?>
            </strong>
            <hr>

            <strong>Customer ID:</strong>
            <?= htmlspecialchars($order['customer_id']) ?><br>

            <strong>Date:</strong>
            <?= htmlspecialchars($order['date']) ?><br>

            <strong>Arrived date:</strong>
            <?= htmlspecialchars($order['arrived_date'] ?? '-') ?><br>

            <strong>Status:</strong>
            <?= htmlspecialchars($order['status']) ?><br>

            <strong>Comments:</strong>
            <?= htmlspecialchars($order['comments']) ?>

        </li>
    <?php endforeach; ?>
</ul>