#!/bin/bash

echo "Inisialisasi Laravel setelah cloning..."

# Mengecek dan menginstal PHP 8.1 atau lebih tinggi
echo "Memastikan PHP 8.1 atau lebih tinggi terinstal..."
if ! command -v php &> /dev/null || [[ "$(php -r 'echo PHP_VERSION_ID;')" -lt 80100 ]]; then
    echo "PHP 8.1 atau lebih tinggi tidak ditemukan. Menginstal PHP 8.1..."
    sudo apt update
    sudo apt install -y php8.1 php8.1-cli php8.1-fpm php8.1-mbstring php8.1-xml php8.1-bcmath php8.1-json php8.1-zip php8.1-curl
fi

# Mengecek dan menginstal Composer
echo "Memastikan Composer terinstal..."
if ! command -v composer &> /dev/null; then
    echo "Composer tidak ditemukan. Menginstal Composer..."
    curl -sS https://getcomposer.org/installer | php
    sudo mv composer.phar /usr/local/bin/composer
fi

# Mengecek dan menginstal Node.js dan npm
echo "Memastikan Node.js dan npm terinstal..."
if ! command -v npm &> /dev/null; then
    echo "Node.js dan npm tidak ditemukan. Menginstal Node.js dan npm..."
    curl -fsSL https://deb.nodesource.com/setup_16.x | sudo -E bash -
    sudo apt-get install -y nodejs
fi

# Menjalankan Composer untuk menginstal dependensi PHP
echo "Menginstal dependensi Composer..."
composer install --no-dev --optimize-autoloader

# Menjalankan NPM untuk menginstal dependensi JavaScript
echo "Menginstal dependensi npm..."
npm install

# Membuat file .env jika belum ada
echo "Membuat file .env..."
if [ ! -f .env ]; then
    cp .env.example .env
fi

# Menghasilkan aplikasi key
echo "Menghasilkan aplikasi key..."
php artisan key:generate

# Menjalankan migrasi database dan seeding
echo "Menjalankan migrasi database..."
php artisan migrate --force --seed

# Menjalankan link storage
echo "Menjalankan storage link..."
php artisan storage:link

# Menjalankan perintah optimasi untuk produksi
echo "Menjalankan perintah optimasi..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Pesan selesai
echo "Inisialisasi Laravel selesai. Aplikasi siap dijalankan!"
