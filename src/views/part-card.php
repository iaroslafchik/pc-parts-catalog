<?php
// Single reusable card component
// Expects $c to be defined (one DB row)

?>

<div class="card">
    <div class="card-title">
        <?= e($c['manufacturer']) ?> <?= e($c['model']) ?>
    </div>

    <div class="card-meta">
        Категория: <?= e($c['category']) ?>
    </div>

    <div class="card-price">
        <?= formatPrice($c['price']) ?>
    </div>
</div>
