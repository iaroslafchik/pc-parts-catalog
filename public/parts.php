<?php

require_once __DIR__ . '/../src/queries.php';
require_once __DIR__ . '/../src/helpers.php';

$components = getParts($pdo);

// Simple HTML output (no framework for minimal setup)
?>
<h1>⚙️ All Parts</h1>

<table>
    <tr>
        <th>
            <a href="/categories">Category</a>
        </th>
        <th>
            <a href="/manufacturers">Manufacturer</a>
        </th>
        <th>Model</th>
        <th>Price</th>
    </tr>
<?php foreach ($components as $c): ?>
    <tr>
        <td><?= e($c['category']) ?></td>
        <td><?= e($c['manufacturer']) ?></td>
        <td><?= e($c['model']) ?></td>
        <td>€<?= e($c['price']) ?></td>
    </tr>
<?php endforeach; ?>
</table>