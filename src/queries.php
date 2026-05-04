<?php

require_once __DIR__ . '/db.php';

// Get all categories
function getCategories($pdo) {
    return $pdo->query("SELECT DISTINCT category FROM components")->fetchAll();
}

// Get all manufacturers
function getManufacturers($pdo) {
    return $pdo->query("SELECT DISTINCT manufacturer FROM components")->fetchAll();
}

// Get all components
function getComponents($pdo) {
    return $pdo->query("SELECT * FROM components")->fetchAll();
}

// Get components by category
function getComponentsByCategory($pdo, $category) {
    $stmt = $pdo->prepare("SELECT * FROM components WHERE category = ?");
    $stmt->execute([$category]);
    return $stmt->fetchAll();
}