<?php

require_once __DIR__ . '/../src/queries.php';
require_once __DIR__ . '/../src/helpers.php';

$manufacturers = getManufacturers($pdo);
?>

<h1>Manufacturers</h1>

<ul>
<?php foreach ($manufacturers as $m): ?>
    <li><?= e($m['manufacturer']) ?></li>
<?php endforeach; ?>
</ul>