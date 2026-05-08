<?php

require_once __DIR__ . '/../src/queries.php';
require_once __DIR__ . '/../src/helpers.php';

$title = "Все комплектующие";

ob_start();

$components = getParts($pdo);

// Simple HTML output (no framework for minimal setup)

// reuse grid renderer
require __DIR__ . '/../src/views/parts-grid.php';

// Save buffered HTML into variable
$content = ob_get_clean();

// Pass content into layout
require __DIR__ . '/../src/views/layout.php';
