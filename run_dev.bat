@echo off

:: Mengecek apakah Nginx sudah berjalan
tasklist /FI "IMAGENAME eq nginx.exe" | findstr /I "nginx.exe" >nul
if errorlevel 1 (
    echo Nginx tidak ditemukan, pastikan server Nginx sudah dijalankan.
) else (
    echo Nginx sedang berjalan.
)

:: Mengecek apakah MySQL sudah berjalan
tasklist /FI "IMAGENAME eq mysqld.exe" | findstr /I "mysqld.exe" >nul
if errorlevel 1 (
    echo MySQL tidak ditemukan, pastikan server MySQL sudah dijalankan.
) else (
    echo MySQL sedang berjalan.
)

:: Menjalankan npm run dev di jendela terpisah
start cmd /k "npm run dev"

:: Menjalankan php artisan queue:work di jendela terpisah
start cmd /k "php artisan queue:work"

:: Menjalankan php artisan reverb:start di jendela terpisah
start cmd /k "php artisan reverb:start"

:: Pesan selesai
echo Semua proses telah dimulai di jendela terpisah.
exit
