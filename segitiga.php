<!DOCTYPE html>
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
