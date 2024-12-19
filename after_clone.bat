@echo off
echo Inisialisasi Laravel setelah cloning...

:: Memastikan Composer dan Node.js sudah terinstall
echo Memastikan Composer terinstal...
composer --version >nul 2>&1
if errorlevel 1 (
    echo Composer tidak ditemukan. Pastikan Composer terinstal di sistem Anda.
    exit /b 1
)

echo Memastikan Node.js dan npm terinstal...
npm --version >nul 2>&1
if errorlevel 1 (
    echo Node.js dan npm tidak ditemukan. Pastikan Node.js dan npm terinstal di sistem Anda.
    exit /b 1
)

:: Menjalankan Composer untuk menginstal dependensi PHP
echo Menginstal dependensi Composer...
composer install --no-dev --optimize-autoloader

:: Menjalankan NPM untuk menginstal dependensi JavaScript
echo Menginstal dependensi npm...
npm install

:: Membuat file .env jika belum ada
echo Membuat file .env...
if not exist .env (
    copy .env.example .env
)

:: Menghasilkan aplikasi key
echo Menghasilkan aplikasi key...
php artisan key:generate

:: Menjalankan migrasi database
echo Menjalankan migrasi database...
php artisan migrate --force --seed

:: Menjalankan link storage
echo Menjalankan storage link...
php artisan storage:link

:: Menjalankan perintah optimasi untuk produksi
echo Menjalankan perintah optimasi...
php artisan config:cache
php artisan route:cache
php artisan view:cache

:: Pesan selesai
echo Inisialisasi Laravel selesai. Aplikasi siap dijalankan!
pause
