<?php

require_once __DIR__ . '/../src/queries.php';
require_once __DIR__ . '/../src/helpers.php';

$components = getComponents($pdo);

// Simple HTML output (no framework for minimal setup)
?>
<h1>All Components</h1>

<ul>
<?php foreach ($components as $c): ?>
    <li>
        <?= e($c['category']) ?> |
        <?= e($c['manufacturer']) ?> |
        <?= e($c['model']) ?> |
        €<?= e($c['price']) ?>
    </li>
<?php endforeach; ?>
</ul>