<?php

require_once __DIR__ . '/connection.php';

function tableExists(mysqli $conn, string $table): bool {
    $result = $conn->query("SHOW TABLES LIKE '$table'");
    return $result && $result->num_rows > 0;
}

// Jalankan semua file migrasi
$migrationPath = __DIR__ . '/migrations/';
$files = scandir($migrationPath);

foreach ($files as $file) {
    if (preg_match('/\.php$/', $file)) {
        require_once $migrationPath . $file;
    }
}
