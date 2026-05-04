<?php

require_once __DIR__ . '/../src/queries.php';
require_once __DIR__ . '/../src/helpers.php';

$category = $_GET['name'] ?? '';

$components = getComponentsByCategory($pdo, $category);
?>

<h1>Category: <?= e($category) ?></h1>

<ul>
<?php foreach ($components as $c): ?>
    <li>
        <?= e($c['manufacturer']) ?> |
        <?= e($c['model']) ?> |
        €<?= e($c['price']) ?>
    </li>
<?php endforeach; ?>
</ul>