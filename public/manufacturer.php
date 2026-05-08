<?php

require_once __DIR__ . '/../src/queries.php';
require_once __DIR__ . '/../src/helpers.php';

ob_start();

$manufacturer = $_GET['name'] ?? '';

$title = e($manufacturer);

$components = getPartsByManufacturer($pdo, $manufacturer);

// reuse grid renderer
require __DIR__ . '/../src/views/parts-grid.php';

// Save buffered HTML into variable
$content = ob_get_clean();

// Pass content into layout
require __DIR__ . '/../src/views/layout.php';
