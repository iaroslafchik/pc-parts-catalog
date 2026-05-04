<?php

require_once __DIR__ . '/db.php';

// Get all categories
function getCategories($pdo) {
    return $pdo->query("SELECT DISTINCT category FROM parts")->fetchAll();
}

// Get all manufacturers
function getManufacturers($pdo) {
    return $pdo->query("SELECT DISTINCT manufacturer FROM parts")->fetchAll();
}

// Get all parts
function getParts($pdo) {
    return $pdo->query("SELECT * FROM parts")->fetchAll();
}

// Get components by category
function getPartsByCategory($pdo, $category) {
    $stmt = $pdo->prepare("SELECT * FROM parts WHERE category = ?");
    $stmt->execute([$category]);
    return $stmt->fetchAll();
}

// Get components by manufacturer
function getPartsByManufacturer($pdo, $manufacturer) {
    $stmt = $pdo->prepare("SELECT * FROM parts WHERE manufacturer = ?");
    $stmt->execute([$manufacturer]);
    return $stmt->fetchAll();
}