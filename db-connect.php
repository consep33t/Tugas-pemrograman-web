<?php
// Variabel koneksi
$servername = "localhost"; 
$username = "root";
$password = "";
$dbname = "itbi";

// Buat koneksi menggunakan mysqli
$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
} else {
    echo "Koneksi berhasil!";
}

$conn->close();
?>
