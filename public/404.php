<?php

// Start output buffering so content can be injected into layout
ob_start();

// Page title for browser tab
$title = '404 Not Found';

?>

<h1>404</h1>

<p>
    Указанная страница не найдена.
</p>

<p>
    <a href="/">Вернуться на главную страницу</a>
</p>

<?php

// Save generated HTML
$content = ob_get_clean();

// Render inside shared layout
require __DIR__ . '/../src/views/layout.php';
