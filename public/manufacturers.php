<?php

require_once __DIR__ . '/../src/queries.php';
require_once __DIR__ . '/../src/helpers.php';

$title = "Производители";

ob_start();

$manufacturers = getManufacturers($pdo);
?>

<ul>
    <?php foreach ($manufacturers as $m): ?>
        <li>
            <a href="/manufacturer?name=<?= e($m['manufacturer']) ?>">
                <?= e($m['manufacturer']) ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<?php

// Save buffered HTML into variable
$content = ob_get_clean();

// Pass content into layout
require __DIR__ . '/../src/views/layout.php';
