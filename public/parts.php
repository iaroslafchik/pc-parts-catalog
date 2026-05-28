<?php

require_once __DIR__ . '/../src/queries.php';
require_once __DIR__ . '/../src/helpers.php';

$title = "Все комплектующие";

ob_start();

$filters = [
    'category' => $_GET['category'] ?? '',
    'manufacturer' => $_GET['manufacturer'] ?? '',
    'min_price' => $_GET['min_price'] ?? '',
    'max_price' => $_GET['max_price'] ?? ''
];

$components = getParts($pdo, $filters);

// Simple HTML output (no framework for minimal setup)

require __DIR__ . '/../src/views/parts-filters.php';

// reuse grid renderer
require __DIR__ . '/../src/views/parts-grid.php';

// Save buffered HTML into variable
$content = ob_get_clean();

// Pass content into layout
require __DIR__ . '/../src/views/layout.php';
