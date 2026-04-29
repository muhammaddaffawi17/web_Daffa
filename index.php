<?php
include 'koneksi.php'; // Memanggil file koneksi

// Proses Simpan
if (isset($_POST['simpan'])) {
    $nama  = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);

    if (!empty($nama) && !empty($email)) {
        $sql = "INSERT INTO users (username, email) VALUES ('$nama', '$email')";
        mysqli_query($conn, $sql);
    }
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tugas Daffa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="header">
    <h1>Website M Daffa Wicaksono</h1>
    <p class="sub">Modern Futuristic Design</p>
</header>

<nav class="navbar">
    <a href="#">Home</a>
    <a href="#">About</a>
    <a href="#">Contact</a>
</nav>

<main class="container">
    <section class="card">
        <h2>Paragraf</h2>
        <p>Lorem ipsum dolor sit amet adalah teks standar industri percetakan...</p>
    </section>

    <section class="card">
        <h2>Tabel Data</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nilai</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>M Daffa Wicaksono</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Rifky</td>
                    <td>5</td>
                </tr>
            </tbody>
        </table>
    </section>

<main class="container">
    <section class="card">
        <h2>Form Identitas</h2>
        <form action="" method="POST">
            <input type="text" name="nama" placeholder="Masukkan Nama" required>
            <input type="email" name="email" placeholder="Masukkan Email" required>
            <button type="submit" name="simpan">Simpan</button>
        </form>
    </section>

    <section class="card">
        <h2>Foto Profil</h2>
        <img src="panda.png" alt="Panda" class="img">
    </section>

    <section class="card">
        <h2>Data Tersimpan</h2>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $ambil = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC");
                $no = 1;
                if (mysqli_num_rows($ambil) > 0) {
                    while ($row = mysqli_fetch_assoc($ambil)) {
                        echo "<tr>
                                <td>$no</td>
                                <td>" . htmlspecialchars($row['username']) . "</td>
                                <td>" . htmlspecialchars($row['email']) . "</td>
                              </tr>";
                        $no++;
                    }
                } else {
                    echo "<tr><td colspan='3'>Data masih kosong di database</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </section>
</main>

<script src="script.js"></script>
</body>
</html>