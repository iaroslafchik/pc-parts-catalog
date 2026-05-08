<?php
// This file defines the full HTML page structure
// It receives $content from the page
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars(($title ?? 'PC Price List') . ' | PC Price List')?></title>
    <link rel="stylesheet" href="/css/styles.css">
</head>

<body>
    <div class="page">

        <?php require __DIR__ . '/header.php'; ?>

        <main class="content">
            <?= $content ?> <!-- dynamic page content injected here -->
        </main>

        <?php require __DIR__ . '/footer.php'; ?>

    </div>
</body>

</html>
