<?php

// Loads DB credentials from environment variables for security
$host = getenv('DB_HOST');
$db = getenv('DB_NAME');
$user = getenv('DB_USER');
$pass = getenv('DB_PASS');

try {
    // PDO is used for safe SQL interaction and prepared statements
    $pdo = new PDO(
        "mysql:host=$host;dbname=$db;charset=utf8",
        $user,
        $pass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION // fail loudly on DB errors
        ]
    );
} catch (Exception $e) {
    // Stop execution if DB connection fails
    die("DB connection failed: " . $e->getMessage());
}
