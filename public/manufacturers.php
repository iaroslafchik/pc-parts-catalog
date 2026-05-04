<?php

require_once __DIR__ . '/../src/queries.php';
require_once __DIR__ . '/../src/helpers.php';

$manufacturers = getManufacturers($pdo);
?>

<h1>Manufacturers</h1>

<ul>
<?php foreach ($manufacturers as $m): ?>
    <li>
        <a href="/manufacturer?name=<?= e($m['manufacturer']) ?>">
            <?= e($m['manufacturer']) ?>
        </a>
    </li>
<?php endforeach; ?>
</ul>