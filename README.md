<p align="start" style="display: flex; align-items: center; gap: 10px;">

<span style="font-size: 2rem; font-weight: bold;">ARSIPKU</span>
</p>

<h1>Tujuan</h1>
Aplikasi Arsipku dibuat untuk mempermudah pengelolaan arsip digital secara terstruktur, efisien, dan mudah diakses oleh pengguna. Tujuan utamanya adalah untuk memastikan penyimpanan dokumen menjadi lebih rapi, aman, serta mudah dicari kembali saat dibutuhkan.

<h1>Fitur</h1>
Registrasi dan Login Pengguna

Dashboard Ringkasan Arsip

Manajemen Arsip Surat (Tambah, Edit, Lihat, Hapus)

Unduh Surat dalam Format PDF

Export Data Arsip Surat ke Format CSV

Pencarian Arsip Surat Berdasarkan Judul

Manajemen Kategori Surat (Tambah, Edit, Lihat, Hapus)

Lihat Informasi Akun (Profil)

Fitur Ganti Password

Fitur Hapus Akun

Halaman "About" untuk Melihat Informasi Developer

Logout

<h1>Cara Menjalankan Aplikasi</h1>
Clone Repository

git clone [https://github.com/mylyyyyy/aplikasi-arsip-surat.git](https://github.com/mylyyyyy/aplikasi-arsip-surat.git)
cd arsip-app

Install Dependensi
Gunakan Composer untuk dependensi backend dan NPM untuk dependensi frontend.

composer install
npm install

Konfigurasi Environment
Salin file .env.example menjadi .env dan sesuaikan konfigurasi database Anda (nama database, username, password).

cp .env.example .env

Generate Application Key

php artisan key:generate

Setup Database
Buat database baru di phpMyAdmin (atau sejenisnya) sesuai nama yang Anda atur di file .env. Setelah itu, impor file database.sql yang tersedia di dalam repository.

Jalankan Server
Buka dua terminal. Di terminal pertama, jalankan Vite. Di terminal kedua, jalankan server Laravel.

# Terminal 1
npm run dev

# Terminal 2
php artisan serve


Screenshot Aplikasi
Halaman Login & Register
<p align="center">
<img src="dokumentasi/login.jpg" width="300" alt="Login Screenshot"/>
<img src="dokumentasi/register.jpg" width="300" alt="Register Screenshot"/>
</p>

Halaman About
<p align="center">
<img src="dokumentasi/about.jpg" width="400" alt="About Desktop"/>
</p>

Dashboard & Manajemen Arsip
Dashboard
<p align="center">
<img src="dokumentasi/surat.jpg" width="400" alt="Dashboard Desktop"/>
</p>

Fungsionalitas Arsip
<p align="center">
<img src="dokumentasi/screate.jpg" width="300" alt="Create Surat"/>
<img src="dokumentasi/slihat.jpg" width="300" alt="Lihat Surat"/>
</p>

Manajemen Kategori
<p align="center">
<img src="dokumentasi/kategori.jpg" width="400" alt="Index Kategori"/>
<img src="dokumentasi/kcreatekategori.jpg" width="400" alt="Create Kategori"/>
<img src="dokumentasi/kedit.jpg" width="400" alt="Lihat Kategori"/>
</p>

Halaman Profil
<p align="center">
<img src="dokumentasi/about.jpeg" width="400" alt="Profile"/>
</p>
