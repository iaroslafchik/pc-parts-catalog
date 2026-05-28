<?php

require_once __DIR__ . '/../src/queries.php';
require_once __DIR__ . '/../src/helpers.php';

ob_start();

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

$part = getPartById($pdo, $id);

if (!$part) {
    $title = 'Не найдено';
    echo "<h1>Не найдено</h1>";
} else {

    $title = $part['manufacturer'] . ' ' . $part['model'];

?>

<h1>
    <?= e($part['manufacturer']) ?> <?= e($part['model']) ?>
</h1>

<p>
    Категория: <?= e($part['category']) ?>
</p>

<p>
    Цена: <?= formatPrice($part['price']) ?>
</p>

<!-- placeholder for future attributes -->
<h3>Характеристики:</h3>
<p>Скоро</p>

<?php
}

$content = ob_get_clean();

require __DIR__ . '/../src/views/layout.php';