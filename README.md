# Absensi Laravel Backend

![Auth Screen](/screen/auth.png)

![Auth Screen](/screen/user.png)

![Auth Screen](/screen/company-detail.png)

![Auth Screen](/screen/permission.png)

![Auth Screen](/screen/permission-detail.png)

Absensi Laravel Backend adalah aplikasi backend untuk sistem absensi karyawan yang dibangun menggunakan framework Laravel versi 11. Aplikasi ini menyediakan API yang dapat diintegrasikan dengan aplikasi frontend untuk memanajemen data kehadiran karyawan secara efisien.

## Persyaratan

- PHP >= 8.3
- Composer
- MySQL atau database yang kompatibel dengan Laravel

## Instalasi

Untuk menjalankan project ini di lingkungan lokal, ikuti langkah-langkah berikut:

### 1. Kloning Repository

Clone repository ini ke lokal Anda dengan perintah:

```
git clone https://github.com/liu-purnomo/absensi-laravel-backend.git
```

### 2. Masuk ke Direktori Project

Ganti direktori ke folder project yang telah di-klon:

```
cd absensi-laravel-backend
```

### 3. Install Dependencies

Jalankan Composer untuk menginstall dependencies yang diperlukan oleh Laravel:

```
composer install
```

### 4. Buat App Key

Generate app key yang akan digunakan untuk mengamankan aplikasi Anda:

```
php artisan key:generate
```

### 5. Link Storage

Link folder storage ke public untuk mengakses file secara publik:

```
php artisan storage:link
```

### 6. Konfigurasi Environment

Salin file `.env.example` ke `.env` dan sesuaikan konfigurasinya:

```
cp .env.example .env
```

Edit file `.env` dan atur konfigurasi database Anda:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database_anda
DB_USERNAME=username_database_anda
DB_PASSWORD=password_database_anda
```

### 7. Jalankan Migrasi Database

Setelah konfigurasi database selesai, jalankan migrasi untuk mengatur database:

```
php artisan migrate
```

## Menjalankan Server

Untuk menjalankan server Laravel secara lokal, gunakan perintah berikut:

```
php artisan serve
```

Server akan berjalan di `http://localhost:8000`.

## Lisensi

Proyek ini dilisensikan di bawah [Lisensi MIT](LICENSE).
