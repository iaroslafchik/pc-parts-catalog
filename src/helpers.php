<?php

// Safely escape HTML output to prevent XSS attacks
function e($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

// Format price consistently (e.g., €1200.00)
function formatPrice($price) {
    return '€' . number_format($price, 2);
}

// Simple debug helper (development only)
function dd($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}