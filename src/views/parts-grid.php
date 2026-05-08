<?php
// Expects $components array

?>

<div class="grid">
    <?php foreach ($components as $c): ?>
        <?php require __DIR__ . '/part-card.php'; ?>
    <?php endforeach; ?>
</div>
