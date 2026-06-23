<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>



# LK-11
Nama: Melany Kresna Putri<br>
NIM: 24102015<br>
Mata Kuliah: Pemrograman Web<br>

## Fitur Tambahan & Perbaikan (LK-11)
Pada tugas praktikum LK-11, dilakukan beberapa perbaikan bug (bug fixing) dan refactoring kode:
- **Pembersihan Konflik Git**: Mengeliminasi penanda konflik git pada `README.md`.
- **Keamanan Mass Assignment**: Mengganti penggunaan `$request->all()` dengan `$request->validated()` di controller mahasiswa untuk mencegah celah keamanan mass assignment.
- **Pencegahan TypeError**: Menerapkan Route Model Binding untuk parameter route agar otomatis menghasilkan HTTP 404 (Not Found) jika parameter tidak valid, alih-alih TypeError HTTP 500.
- **Visual Alert Error**: Menambahkan penampil error (`session('error')`) secara global pada layout utama `app.blade.php`.
- **Deduplikasi Rute**: Menyederhanakan dan mengonsolidasikan rute-rute login pada `routes/web.php` menggunakan closure bersama.
- **Enkapsulasi Validasi**: Mengekstrak aturan validasi ke Form Request (`StoreMahasiswaRequest` & `UpdateMahasiswaRequest`).

## Preview Aplikasi

### Halaman Login Page
<img src="/public/image/TampilanLoginPage (1).png" width="500" alt="Tampilan Login Page">

### Halaman Proteksi Login
<img src="public/image/TampilanProteksiLogin.png" width="500" alt="Proteksi Login">

### Halaman Pilih akun yang akan terhubung
<img src="public//image/TampilanLoginPage (3).png" width="500" alt="Pilih akun yang akan terhubung">

### Halaman Tampilan Mahasiswa
<img src="public/image/TampilanMahasiswa.png" width="500" alt="Tampilan Mahasiswa">

### Halaman API User
<img src="public/image/API.png" width="500" alt="API User">

