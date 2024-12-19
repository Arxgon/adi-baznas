#!/bin/bash

# Fungsi untuk mengecek apakah proses berjalan
check_process() {
    if pgrep -x "$1" > /dev/null
    then
        echo "$1 sedang berjalan."
    else
        echo "$1 tidak ditemukan, pastikan server $1 sudah dijalankan."
    fi
}

# Mengecek apakah Nginx berjalan
echo "Mengecek status Nginx..."
check_process "nginx"

# Mengecek apakah MySQL berjalan
echo "Mengecek status MySQL..."
check_process "mysqld"

# Menjalankan npm run dev di background
echo "Menjalankan npm run dev..."
nohup npm run dev &

# Menjalankan php artisan queue:work di background
echo "Menjalankan php artisan queue:work..."
nohup php artisan queue:work &

# Menjalankan php artisan reverb:start di background
echo "Menjalankan php artisan reverb:start..."
nohup php artisan reverb:start &

# Pesan selesai
echo "Semua proses telah dimulai di background."
