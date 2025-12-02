# Inventaris-Lab

Sistem Informasi Manajemen Inventaris Laboratorium.

Proyek ini bertujuan untuk menyediakan solusi digital yang efisien untuk mengelola aset, peralatan, dan stok di lingkungan laboratorium, memudahkan staf dalam pemantauan dan administrasi.

***

## 🌟 Fitur Utama

- **Manajemen Data Inventaris**: Menyimpan, mengedit, dan menghapus detail lengkap setiap item inventaris (nama, kode, spesifikasi, dll.).
- **Pencatatan Stok Real-Time**: Melacak jumlah stok yang tersedia, yang sedang digunakan, atau yang rusak.
- **Kategorisasi**: Pengelompokan barang berdasarkan jenis, lokasi, atau sumber perolehan.
- **Fitur Peminjaman/Pengembalian (Opsional)**: Mencatat transaksi peminjaman alat oleh pengguna (mahasiswa/staf).
- **Laporan Data**: Menghasilkan laporan inventaris dan stok dalam format yang mudah dibaca.
- **Otentikasi Pengguna**: Sistem login terpisah untuk hak akses (misalnya, Admin dan Staf).

***

## 🛠️ Teknologi yang Digunakan

Proyek ini dibangun menggunakan kerangka kerja (framework) dan bahasa pemrograman berbasis web yang populer:

- **Backend Framework**: **[Laravel](https://laravel.com/)** (PHP)
- **Bahasa Pemrograman**: PHP
- **Database**: MySQL/MariaDB (Dapat dikonfigurasi melalui `.env`)
- **Frontend**: HTML, CSS, JavaScript
- **Templating Engine**: Blade
- **Package Manager**: Composer (untuk PHP) dan NPM/Yarn (untuk aset frontend)

***

## ⚙️ Prasyarat Instalasi

Sebelum memulai, pastikan Anda telah menginstal lingkungan pengembangan yang diperlukan:

1.  **Web Server**: Apache atau Nginx
2.  **PHP**: Versi 8.1 atau lebih tinggi
3.  **Database**: MySQL/MariaDB
4.  **Composer**: Package manager untuk PHP
5.  **Node.js & NPM/Yarn**: Untuk kompilasi aset frontend

***

## 📂 Susunan Project

Struktur direktori utama proyek ini mengikuti standar konvensi **Laravel**:

```bash
.
├── app/                  # Logika inti aplikasi (Models, Controllers, dll.)
├── bootstrap/            # Skrip bootstrap framework
├── config/               # File konfigurasi
├── database/             # Migrasi, Seeder, dan Factory database
├── public/               # File yang dapat diakses publik (index.php, aset)
├── resources/            # Aset mentah (Blade views, Sass/Less, JavaScript)
├── routes/               # Semua definisi rute aplikasi (web, api)
├── storage/              # Cache, sesi, log
├── tests/                # Unit dan fitur testing
├── .env.example          # Contoh konfigurasi lingkungan
├── artisan               # Console command line untuk Laravel
└── composer.json         # Daftar dependensi PHP
🚀 Contoh Penggunaan
Ikuti langkah-langkah berikut untuk mengatur dan menjalankan aplikasi secara lokal:

Kloning Repositori:

Bash

git clone [https://github.com/ahnafrm-src/Inventaris-Lab.git](https://github.com/ahnafrm-src/Inventaris-Lab.git)
cd Inventaris-Lab
Instalasi Dependensi PHP:

Bash

composer install
Konfigurasi Lingkungan:

Salin file .env.example menjadi .env:

Bash

cp .env.example .env
Buat kunci aplikasi:

Bash

php artisan key:generate
Konfigurasi detail koneksi database Anda di file .env.

Migrasi Database:

Bash

php artisan migrate
# Jika Anda memiliki data awal, jalankan:
# php artisan db:seed
Instalasi & Kompilasi Aset Frontend:

Bash

npm install
npm run dev  # Untuk pengembangan
# atau npm run build # Untuk produksi
Jalankan Aplikasi:

Bash

php artisan serve
Aplikasi akan dapat diakses melalui URL lokal yang ditampilkan (biasanya http://127.0.0.1:8000).

🤝 Kontribusi
Kontribusi Anda sangat kami hargai! Untuk berkontribusi, ikuti langkah-langkah di bawah ini:

Lakukan Fork repositori ini.

Buat branch fitur baru (git checkout -b fitur/nama-fitur).

Commit perubahan Anda (git commit -m 'Tambahkan: Deskripsi fitur').

Push ke branch (git push origin fitur/nama-fitur).

Ajukan Pull Request baru.

📜 Lisensi
Proyek ini dilisensikan di bawah Lisensi MIT.

MIT License

Copyright (c) [Tahun Saat Ini] ahnafrm-src

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
