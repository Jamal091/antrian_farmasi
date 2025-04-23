<?php
$host     = "localhost";
$username = "root";
$password = "";
$database = "antrian_farmasi";

$koneksi_db = new mysqli($host, $username, $password, $database);

// Cek koneksi
if ($koneksi_db->connect_error) {
    die("Koneksi gagal: " . $koneksi_db->connect_error);
}
?>
