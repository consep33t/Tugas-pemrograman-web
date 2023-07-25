# Tugas-pemrograman-web
di sini saya membuat database baru dan mengkoneksikannya dengan phpmyadmin, dan membuat fungsi mencari luas segitiga
Nama : ageng prayoga
Nim : 21040196
Jurusan : Teknik informatika
Mata kuliah : pemrograman web
Dosen : arif simanjuntak

1. <!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Luas Segitiga</title>
</head>
<body>

<h2>Kalkulator Luas Segitiga</h2>
<form method="post" action="">
    Alas: <input type="number" name="alas" required><br>
    Tinggi: <input type="number" name="tinggi" required><br>
    <input type="submit" name="submit" value="Hitung">
</form>

<?php
if (isset($_POST['submit'])) {
    // Mengambil nilai alas dan tinggi dari input user
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];

    // Melakukan perhitungan luas segitiga
    $luas = 0.5 * $alas * $tinggi;

    // Menampilkan hasil
    echo "<p>Luas segitiga dengan alas $alas dan tinggi $tinggi adalah: $luas</p>";
}
?>

</body>
</html>

Pada programa di atas syaa menggunakan metode $post untuk mengambil input data dari user
Kemudian input akan kita simpan ke dalam variable dan kemudian variable kita gunakan untuk membuat sebuah funsi di mana fungsinya untuk mencari luas segitiga dan saya menggunakan server dari xampp dan berikut hasil nya:
  
 



2.membuat database baru nama database itbi
Pertama kita koneksikan dulu ke php my admin dengan menggunakan servername, username, dan password . di sini saya mengunakan akun bawaan dari xampp dengan username root .
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


Kemudian kita buar database baru dengan perintah CREATE DATABASE.
Di sini saya juga membuat error chack agar mengetahui apakah database sudah di buat dengan benar atau belum. Jika sudah maka hasilnya seperti gambar berikut:

 

3.
Kemudian untuk mengkoneksikannnya  ke database yang kita buat sbeblumnya saya menggunakan mysqli dengan variabelkoneksi seperti sebelumnya dan kita tambahkan dbname untuk terkoneksi ke database nya di sini nama databasenya dengan nama itbi 
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

 
Jika sudah terkoneksi makan akan muncul seperti berikut: 
 
