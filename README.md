🚀 Modern Futuristic Aesthetic

Selamat datang di repositori proyek website personal M Daffa Wicaksono. Website ini merupakan perpaduan antara desain visual yang berani dengan fungsionalitas sistem manajemen data berbasis web, menciptakan pengalaman pengguna yang dinamis dan interaktif.

 📖 Deskripsi Proyek

Website ini dibangun dengan visi Futuristic Simplicity. Menggunakan tipografi klasik yang dipadukan dengan skema warna pastel yang lembut, proyek ini bertujuan untuk menunjukkan bagaimana sebuah portofolio digital dapat tampil profesional namun tetap memiliki sentuhan personal yang unik. Fokus utamanya adalah pada kehalusan animasi (smooth motion) dan integritas data antara pengguna dan server.

✨ Fitur Unggulan & Pengalaman Pengguna

Efek Typing Dinamis: Header utama menggunakan animasi ketik otomatis yang memberikan kesan "hidup" saat halaman pertama kali dimuat.
Interaksi Card Responsif: Setiap elemen informasi (card) memiliki efek hover dan click scaling yang memberikan umpan balik visual instan kepada pengunjung.
Sistem Animasi Scroll: Menggunakan teknologi *Intersection Observer* untuk memunculkan konten secara bertahap dengan transisi halus saat pengguna melakukan scrolling.
Pengelolaan Data Real-time: Dilengkapi dengan formulir identitas yang terhubung langsung ke database MySQL, memungkinkan penyimpanan dan penampilan data pengunjung secara sistematis.
Estetika Visual Cute-Modern: Integrasi aset visual seperti panda.png yang memberikan karakter ramah di tengah desain yang futuristik.

🛠️ Arsitektur Teknologi

Frontend: 
    HTML5: Struktur semantik yang kokoh.
    CSS3: Penggunaan sistem grid/flexbox, variabel warna, dan desain kartu dengan shadow yang memberikan efek kedalaman.
    JavaScript: Logika kustom untuk seluruh animasi tanpa bergantung pada library eksternal (Pure Vanilla JS).
    Backend:
    PHP: Menangani logika pemrosesan formulir dan sinkronisasi data server.
    MySQL: Sebagai media penyimpanan data relasional yang aman dan terstruktur.

📂Struktur Repositori

index.php: Pusat kendali aplikasi yang menggabungkan logika PHP dan antarmuka pengguna.
koneksi.php: Jembatan komunikasi antara aplikasi web dan database MySQL.
 style.css: Arsitektur desain yang mengatur estetika, warna, dan tata letak.
 script.js: "Otak" di balik seluruh animasi dan interaksi dinamis pada halaman.
 web-hasil.png: Dokumentasi visual hasil akhir proyek.

⚙️ Petunjuk Instalasi Database

Pastikan server lokal Anda (XAMPP/Laragon) aktif, lalu jalankan query berikut pada phpMyAdmin:

sql
CREATE DATABASE db_blog_m_daffa;

USE db_blog_m_daffa;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
);