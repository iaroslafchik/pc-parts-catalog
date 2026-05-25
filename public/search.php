<?php

require_once __DIR__ . '/../src/queries.php';
require_once __DIR__ . '/../src/helpers.php';

ob_start();

$query = trim($_GET['q'] ?? '');

$title = 'Search';

$components = [];

// Only search if query exists
if ($query !== '') {
    $components = searchComponents($pdo, $query);
}

?>

<?php if ($query === ''): ?>

    <p>
        Введите поисковый запрос
    </p>

<?php elseif (empty($components)): ?>

    <p>
        По запросу
        <strong><?= e($query) ?></strong>
        ничего не найдено
    </p>

<?php else: ?>

    <?php require __DIR__ . '/../src/views/parts-grid.php'; ?>

<?php endif; ?>

<?php

$content = ob_get_clean();

require __DIR__ . '/../src/views/layout.php';