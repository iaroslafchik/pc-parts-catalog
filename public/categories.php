<?php

require_once __DIR__ . '/../src/queries.php';
require_once __DIR__ . '/../src/helpers.php';

$categories = getCategories($pdo);
?>

<h1>Categories</h1>

<ul>
<?php foreach ($categories as $c): ?>
    <li>
        <a href="/category?name=<?= e($c['category']) ?>">
            <?= e($c['category']) ?>
        </a>
    </li>
<?php endforeach; ?>
</ul>