<?php

// Entry point for all requests
// Keeps routing centralized and avoids multiple entry scripts

$routes = require __DIR__ . '/../config/routes.php';

$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

// Default fallback page if route not found
// Resolve route or fallback
$file = $routes[$path] ?? '404.php';

// Build absolute file path
$fullPath = __DIR__ . '/' . $file;

// If page exists -> render it
if (file_exists($fullPath)) {

    // Send 404 status for fallback page
    if ($file === '404.php') {
        http_response_code(404);
    }

    require $fullPath;

} else {

    // Hard fail-safe if route points to missing file
    http_response_code(500);

    echo '500 Internal Server Error';
}
