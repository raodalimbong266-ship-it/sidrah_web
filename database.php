<?php
// Koneksi opsional untuk pengembangan fitur database berikutnya.
$host = 'localhost';
$dbname = 'sidrah_tart';
$username = 'root';
$password = '';
try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    // Halaman katalog tetap dapat ditampilkan saat database belum diimpor.
    $pdo = null;
}
