<?php

require_once __DIR__ . '/db.php';

// Get all categories
function getCategories($pdo)
{
    return $pdo->query("SELECT DISTINCT category FROM parts")->fetchAll();
}

// Get all manufacturers
function getManufacturers($pdo)
{
    return $pdo->query("SELECT DISTINCT manufacturer FROM parts")->fetchAll();
}

// Get all parts
function getParts($pdo, $filters = []) {

    // Base SQL
    $sql = "SELECT * FROM parts WHERE 1=1";

    $params = [];

    // Filter by category
    if (!empty($filters['category'])) {
        $sql .= " AND category = ?";
        $params[] = $filters['category'];
    }

    // Filter by manufacturer
    if (!empty($filters['manufacturer'])) {
        $sql .= " AND manufacturer = ?";
        $params[] = $filters['manufacturer'];
    }

    // Min price
    if (!empty($filters['min_price'])) {
        $sql .= " AND price >= ?";
        $params[] = (float)$filters['min_price'];
    }

    // Max price
    if (!empty($filters['max_price'])) {
        $sql .= " AND price <= ?";
        $params[] = (float)$filters['max_price'];
    }

    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);

    return $stmt->fetchAll();
}

// Get components by category
function getPartsByCategory($pdo, $category)
{
    $stmt = $pdo->prepare("SELECT * FROM parts WHERE category = ?");
    $stmt->execute([$category]);
    return $stmt->fetchAll();
}

// Get components by manufacturer
function getPartsByManufacturer($pdo, $manufacturer)
{
    $stmt = $pdo->prepare("SELECT * FROM parts WHERE manufacturer = ?");
    $stmt->execute([$manufacturer]);
    return $stmt->fetchAll();
}

/**
 * Search components by manufacturer, model, or category
 */
function searchParts($pdo, $query) {

    $sql = "
        SELECT *
        FROM parts
        WHERE
            manufacturer LIKE ?
            OR model LIKE ?
            OR category LIKE ?
    ";

    $search = '%' . $query . '%';

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        $search,
        $search,
        $search
    ]);

    return $stmt->fetchAll();
}

function getPartById($pdo, $id) {

    $stmt = $pdo->prepare("
        SELECT *
        FROM parts
        WHERE id = ?
        LIMIT 1
    ");

    $stmt->execute([$id]);

    return $stmt->fetch();
}

function getComponents($pdo, $filters = []) {

    // Base SQL
    $sql = "SELECT * FROM parts WHERE 1=1";

    $params = [];

    // Filter by category
    if (!empty($filters['category'])) {
        $sql .= " AND category = ?";
        $params[] = $filters['category'];
    }

    // Filter by manufacturer
    if (!empty($filters['manufacturer'])) {
        $sql .= " AND manufacturer = ?";
        $params[] = $filters['manufacturer'];
    }

    // Min price
    if (!empty($filters['min_price'])) {
        $sql .= " AND price >= ?";
        $params[] = (float)$filters['min_price'];
    }

    // Max price
    if (!empty($filters['max_price'])) {
        $sql .= " AND price <= ?";
        $params[] = (float)$filters['max_price'];
    }

    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);

    return $stmt->fetchAll();
}