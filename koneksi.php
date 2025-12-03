<?php

$host = 'localhost';
$dbname = 'db_portofolio'; 
$username = 'root'; 
$password = ''; 

// --- Data Source Name (DSN) ---
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

// --- Opsi PDO ---
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Menampilkan error exception
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // Fetch data sebagai array asosiatif
    PDO::ATTR_EMULATE_PREPARES   => false,                  // Menggunakan prepared statement asli
];

try {
    // Membuat objek PDO untuk koneksi
    $pdo = new PDO($dsn, $username, $password, $options);
} catch (\PDOException $e) {
    // Jika koneksi gagal, hentikan script dan tampilkan pesan error
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
?>V