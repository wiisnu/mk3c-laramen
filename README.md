# Album Management System 🎵

## Deskripsi Proyek
Sistem Manajemen Album adalah aplikasi web canggih yang dirancang untuk membantu pengguna mengelola koleksi musik digital dengan mudah dan efisien. Menggunakan teknologi Laravel dan Filament, aplikasi ini menyediakan antarmuka admin yang kuat untuk menambah, mengedit, dan menghapus data album.

## 🚀 Fitur Utama
- **Manajemen Album Lengkap**
  - Tambah album baru dengan detail komprehensif
  - Edit informasi album yang sudah ada
  - Hapus album dengan satu klik
  - Pratinjau daftar album secara menyeluruh

- **Manajemen Gambar**
  - Unggah gambar album dengan dukungan berbagai format
  - Tampilan gambar berkualitas tinggi
  - Pemrosesan gambar otomatis

- **Panel Admin Canggih**
  - Antarmuka admin responsif menggunakan Filament
  - Kontrol akses berbasis peran
  - Navigasi intuitif dan mudah digunakan

## 🛠️ Prasyarat Sistem
- PHP 8.1 atau lebih tinggi
- Composer 2.x
- Node.js 16.x atau lebih tinggi
- MySQL 5.7 atau MariaDB 10.3+

## 📦 Instalasi

### Prasyarat
Pastikan Anda telah menginstal prasyarat sistem di atas sebelum memulai.

### Langkah Instalasi

1. **Clone Repository**
   ```bash
   git clone https://github.com/FabianTrafada/AST.git
   cd album-management
   ```

2. **Instal Dependensi**
   ```bash
   composer install
   npm install
   ```

3. **Konfigurasi Lingkungan**
   ```bash
   # Salin konfigurasi environment
   cp .env.example .env

   # Generate application key
   php artisan key:generate
   ```

4. **Konfigurasi Database**
   - Buka file `.env`
   - Sesuaikan pengaturan database:
     ```
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=AST
     DB_USERNAME=root
     DB_PASSWORD=
     ```

5. **Migrasi Database**
   ```bash
   php artisan migrate
   ```

6. **Konfigurasi Penyimpanan**
   ```bash
   # Buat symlink untuk penyimpanan publik
   php artisan storage:link
   ```

7. **Jalankan Aplikasi**
   ```bash
   # Jalankan server Laravel
   php artisan serve

   # Jalankan kompilasi asset (di terminal terpisah)
   npm run dev
   ```

## 🔐 Akses Admin

### Membuat Akun Admin
```bash
php artisan make:filament-user
```

### Login
- **URL Admin**: `http://localhost:8000/admin`
- Gunakan kredensial yang baru dibuat

## 📊 Struktur Database

### Tabel `albums`

| Kolom         | Tipe       | Deskripsi                 | Constraints   |
|---------------|------------|---------------------------|---------------|
| `id`          | BigInt     | Pengidentifikasi Unik     | Primary Key   |
| `title`       | String     | Judul Album               | Required      |
| `artist`      | String     | Nama Artis                | Required      |
| `release_date`| Date       | Tanggal Rilis Album       | Nullable      |
| `image`       | String     | Path Gambar Album         | Nullable      |
| `created_at`  | Timestamp  | Waktu Pembuatan           | Automatic     |
| `updated_at`  | Timestamp  | Waktu Terakhir Diperbarui | Automatic     |

## 🔧 Teknologi

### Backend
- **Laravel 10.x**: Framework PHP modern
- **PHP 8.1+**: Bahasa pemrograman utama

### Frontend
- **Filament**: Panel admin responsif
- **TailwindCSS**: Styling modern
- **Alpine.js**: Interaktivitas ringan

### Database
- **MySQL/MariaDB**: Penyimpanan data
- **Eloquent ORM**: Manajemen database

## 🧪 Pengujian
- Jalankan tes dengan: `php artisan test`
- Cakupan tes: Unit & Fitur

## 🤝 Kontribusi
1. Fork repository
2. Buat branch fitur (`git checkout -b fitur/AturanBaru`)
3. Commit perubahan (`git commit -m 'Tambah fitur baru'`)
4. Push ke branch (`git push origin fitur/AturanBaru`)
5. Buat Pull Request

## 📄 Lisensi
Dilisensikan di bawah [MIT License](LICENSE). Bebas digunakan untuk proyek apa pun.

---
## Joki By Fabian XI PPLG 1 and Dika XII PPLG 6
