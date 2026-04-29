<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_blog_m_daffa";

// Menjalankan perintah koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// Cek apakah koneksi berhasil
if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
?>