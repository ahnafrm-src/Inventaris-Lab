# Inventaris-Lab

Inventaris-Lab adalah aplikasi manajemen inventaris laboratorium berbasis **Laravel** untuk membantu pencatatan data barang, kategori, peminjam, dan transaksi peminjaman secara terstruktur.

## ✨ Fitur Utama

- **Autentikasi pengguna** dengan middleware `auth.custom`.
- **Manajemen master data**:
  - Barang
  - Kategori
  - Peminjam
  - Lab
  - User
- **Manajemen transaksi peminjaman** untuk mendukung proses operasional laboratorium.
- **Halaman dashboard per modul** untuk memudahkan monitoring data.

## 🧱 Teknologi

- **Backend**: Laravel (PHP)
- **Frontend**: Blade, CSS, JavaScript (Vite)
- **Database**: MySQL/MariaDB (konfigurasi via `.env`)
- **Dependency manager**: Composer & npm

## 📁 Struktur Direktori Inti

```text
app/            # Controller, model, middleware, dan service provider
config/         # Konfigurasi aplikasi Laravel
database/       # Migration, seeder, dan factory
public/         # Entry point aplikasi dan aset publik
resources/      # Blade view, CSS, JS
routes/         # Definisi route web/console
storage/        # Log, cache, session, dan file runtime
tests/          # Unit test & feature test
```

## ✅ Penilaian Singkat Dokumentasi

Secara umum dokumentasi **sudah bagus** untuk level project pembelajaran/portofolio karena:

- tujuan aplikasi jelas,
- fitur utama tercantum,
- alur instalasi lokal sudah runut,
- endpoint penting sudah dirangkum.

Supaya lebih siap dipakai tim baru, saya tambahkan bagian prasyarat, troubleshooting, dan alur build produksi di bawah.

## 🚀 Cara Menjalankan di Lokal

### Prasyarat

Pastikan environment memenuhi kebutuhan berikut:

- PHP 8.2+ (disarankan)
- Composer 2.x
- Node.js 18+ dan npm 9+
- MySQL/MariaDB aktif

### 1) Clone repository

```bash
git clone https://github.com/ahnafrm-src/Inventaris-Lab.git
cd Inventaris-Lab
```

### 2) Install dependency backend

```bash
composer install
```

### 3) Konfigurasi environment

```bash
cp .env.example .env
php artisan key:generate
```

Lalu sesuaikan konfigurasi database di file `.env` (`DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD`).

### 4) Jalankan migrasi database

```bash
php artisan migrate
```

Jika diperlukan, jalankan seeder:

```bash
php artisan db:seed
```

### 5) Install dependency frontend

```bash
npm install
```

### 6) Jalankan aplikasi

Terminal 1 (server Laravel):

```bash
php artisan serve
```

Terminal 2 (Vite dev server):

```bash
npm run dev
```

Aplikasi biasanya bisa diakses di `http://127.0.0.1:8000`.

## 🏭 Build untuk Produksi

Untuk build aset frontend production:

```bash
npm run build
```

Lalu jalankan server PHP sesuai kebutuhan deployment (Nginx/Apache/PHP-FPM).

## 🧭 Ringkasan Endpoint Utama

Berikut endpoint yang tersedia berdasarkan route saat ini:

- `/login` (GET/POST) dan `/logout`
- `/` (home)
- Resource route:
  - `/user`
  - `/barang`
  - `/kategori`
  - `/peminjam`
  - `/peminjaman`
  - `/labs`
- Dashboard route tambahan:
  - `/peminjams/dashboard`
  - `/kategoris/dashboard`
  - `/barangs/dashboard`

> Sebagian besar route di atas dilindungi middleware `auth.custom`.

## 🧪 Pengujian

Jalankan test dengan:

```bash
php artisan test
```

## 🛠️ Troubleshooting Singkat

- Jika muncul error key aplikasi:

  ```bash
  php artisan key:generate
  ```

- Jika migrasi gagal karena database belum ada, buat dulu database sesuai `DB_DATABASE` di `.env`, lalu ulangi:

  ```bash
  php artisan migrate
  ```

- Jika asset tidak termuat saat development, pastikan Vite berjalan:

  ```bash
  npm run dev
  ```

## 🤝 Kontribusi

1. Fork repository ini.
2. Buat branch fitur baru: `git checkout -b feature/nama-fitur`
3. Commit perubahan: `git commit -m "feat: deskripsi perubahan"`
4. Push branch: `git push origin feature/nama-fitur`
5. Buat Pull Request.

## 📄 Lisensi

Proyek ini menggunakan lisensi **MIT**.
