# Sistem Informasi Perpustakaan

Sistem Informasi Perpustakaan adalah aplikasi berbasis web yang dibangun menggunakan framework **CodeIgniter 3**. Proyek ini merupakan tugas **semester 2** untuk mata kuliah **Workshop Pengembangan Web**. Aplikasi ini dirancang untuk memudahkan manajemen data perpustakaan, seperti data anggota, buku, peminjaman, dan pengembalian.

---

## Fitur-fitur

- **Manajemen Anggota:** Tambah, ubah, dan hapus data anggota perpustakaan.
- **Manajemen Buku:** Kelola data buku, termasuk judul, penulis, dan kategori.
- **Peminjaman dan Pengembalian:** Mencatat transaksi peminjaman dan pengembalian buku secara terperinci.
- **Dashboard Interaktif:** Tampilan dashboard yang menyajikan statistik jumlah anggota, buku, peminjaman, dan pengembalian secara real-time.
- **Manajemen Kategori:** Kelola kategori buku untuk pengorganisasian yang lebih baik.

---

## Persyaratan Sistem

Untuk menjalankan proyek ini, pastikan Anda memiliki lingkungan server lokal dengan konfigurasi berikut:

- **Web Server:** Apache
- **PHP:** Versi 5.6 atau lebih tinggi
- **Database:** MySQL atau MariaDB
- **Framework:** CodeIgniter 3

---

## Cara Instalasi dan Menjalankan Proyek

Ikuti langkah-langkah berikut untuk menginstal dan menjalankan proyek di komputer lokal Anda:

### 1. Ekstraksi File

1. Unduh atau klon repositori ini.
2. Ekstrak file `.rar` jika proyek masih dalam bentuk terkompresi.

### 2. Konfigurasi Database

1. Buka aplikasi server lokal Anda (seperti **XAMPP**, **WAMP**, atau **Laragon**) dan nyalakan modul **Apache** dan **MySQL**.
2. Buka peramban web dan akses `http://localhost/phpmyadmin` untuk membuat database baru.
3. Buat database baru dengan nama **`perpustakaan`**.
4. Impor file database (`.sql`) yang mungkin tersedia di folder proyek (jika ada) ke dalam database `perpustakaan` yang baru Anda buat.

### 3. Konfigurasi Proyek CodeIgniter

1. Buka folder proyek dan cari file konfigurasi database di `application/config/database.php`.
2. Ubah kredensial database sesuai dengan pengaturan Anda:

```php
$db['default'] = array(
    'dsn'      => '',
    'hostname' => 'localhost',
    'username' => 'root', // Ganti dengan username database Anda
    'password' => '',     // Ganti dengan password database Anda
    'database' => 'perpustakaan',
    'dbdriver' => 'mysqli',
    // ... konfigurasi lainnya
);
