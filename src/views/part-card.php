<?php
// Single reusable card component
// Expects $c to be defined (one DB row)

?>

<div class="card">

    <a href="/part?id=<?=(int)$c['id']?>" class="card-link">

        <div class="card-image">
            <img
                src="/images/placeholder.png"
                alt="No image"
            >
        </div>
        
        <div class="card-title">
            <?= e($c['manufacturer']) ?> <?= e($c['model']) ?>
        </div>
    
        <div class="card-meta">
            Категория: <?= e($c['category']) ?>
        </div>
    
        <div class="card-price">
            <?= formatPrice($c['price']) ?>
        </div>

    </a>

</div>
