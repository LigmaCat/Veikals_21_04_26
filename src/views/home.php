<h1>Dashboard</h1>

<div style="display:flex; gap:20px;">

    <div style="padding:15px; border:1px solid #ccc; border-radius:8px;">
        <h2>Customers</h2>
        <p style="font-size:24px;">
            <?= htmlspecialchars($customers) ?>
        </p>
    </div>

    <div style="padding:15px; border:1px solid #ccc; border-radius:8px;">
        <h2>Orders</h2>
        <p style="font-size:24px;">
            <?= htmlspecialchars($orders) ?>
        </p>
    </div>

</div>

<br>

<a href="/customers">Go to customers</a> |
<a href="/orders">Go to orders</a>