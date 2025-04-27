<?php
// Konfigurasi database
$host     = "localhost";
$username = "root"; // Dalam produksi, gunakan user khusus dengan hak terbatas
$password = "";     // Dalam produksi, gunakan password yang kuat
$database = "antrian_farmasi";

// Atur default timezone untuk menghindari warning
date_default_timezone_set('Asia/Jakarta');

try {
    // Membuat koneksi menggunakan mysqli dengan error reporting
    $koneksi_db = new mysqli($host, $username, $password, $database);
    
    // Set charset untuk mencegah masalah encoding
    $koneksi_db->set_charset("utf8mb4");
    
    // Cek koneksi lebih akurat
    if ($koneksi_db->connect_errno) {
        throw new Exception(
            "Database connection failed: [{$koneksi_db->connect_errno}] {$koneksi_db->connect_error}"
        );
    }

} catch (Exception $e) {
    // Catat error lengkap ke log sistem dengan timestamp
    error_log("[".date('Y-m-d H:i:s')."] Database Error: ".$e->getMessage()."\n", 3, "database_errors.log");
    
    // Pesan aman untuk user
    header('HTTP/1.1 503 Service Unavailable');
    die("<h2>Maaf, sistem sedang mengalami gangguan</h2>
        <p>Tim teknis telah diberitahu. Silakan coba lagi nanti.</p>");
}

// Fungsi untuk menutup koneksi
function close_db_connection() {
    global $koneksi_db;
    if (isset($koneksi_db) && $koneksi_db instanceof mysqli) {
        $koneksi_db->close();
    }
}

// Register shutdown function untuk memastikan koneksi ditutup
register_shutdown_function('close_db_connection');
?>