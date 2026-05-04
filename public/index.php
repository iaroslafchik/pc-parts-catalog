<?php

// Entry point for all requests
// Keeps routing centralized and avoids multiple entry scripts

require_once __DIR__ . '/../config/routes.php';

$routes = require __DIR__ . '/../config/routes.php';

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Default fallback page if route not found
$file = $routes[$path] ?? 'components.php';

// Load selected page
require __DIR__ . '/' . $file;