<?php

require_once __DIR__ . '/../src/queries.php';
require_once __DIR__ . '/../src/helpers.php';

$manufacturer = $_GET['name'] ?? '';

$components = getPartsByManufacturer($pdo, $manufacturer);
?>

<h1>Manufacturer: <?= e($manufacturer) ?></h1>

<ul>
<?php foreach ($components as $c): ?>
    <li>
        <?= e($c['category']) ?> |
        <?= e($c['model']) ?> |
        €<?= e($c['price']) ?>
    </li>
<?php endforeach; ?>
</ul>