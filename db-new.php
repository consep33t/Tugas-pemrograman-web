<?php
// Variabel koneksi
$servername = "localhost"; 
$username = "root";
$password = "";

// Buat koneksi menggunakan mysqli
$conn = new mysqli($servername, $username, $password);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// pembuatan database baru
$newDatabaseName = "itbi";

$sql = "CREATE DATABASE $newDatabaseName";
if ($conn->query($sql) === TRUE) {
    echo "Database baru berhasil dibuat bernama: $newDatabaseName";
} else {
    echo "Error saat membuat database:" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
