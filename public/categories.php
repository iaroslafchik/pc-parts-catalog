<?php

require_once __DIR__ . '/../src/queries.php';
require_once __DIR__ . '/../src/helpers.php';

ob_start();

$title = 'Категории';

$categories = getCategories($pdo);
?>

<ul>
    <?php foreach ($categories as $c): ?>
        <li>
            <a href="/category?name=<?= e($c['category']) ?>">
                <?= e($c['category']) ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>

<?php

// Save buffered HTML into variable
$content = ob_get_clean();

// Pass content into layout
require __DIR__ . '/../src/views/layout.php';
