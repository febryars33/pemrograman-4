# Pemrograman 4

Mata Kuliah Pemrograman 4 - PHP & Laravel 8

## Cara Installasi
Arahkan terlebih dahulu ke direktori projectnya, sebelum melakukan perintah dibawah ini. Jika sudah ikuti langkah dibawah ini.

### Konfigurasi Environment Variables
Jika belum membuat database silahkan buat terlebih dahulu di file .env
```php
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pemrograman4
DB_USERNAME=root
DB_PASSWORD=
```

1. Gunakan composer untuk menginstall dependensi PHP

```bash
composer install
```

2. Gunakan npm (NodeJS) untuk menginstall dependensi JavaScript

```bash
npm install && npm run dev
```

3. Men-generate APP KEY baru

```bash
php artisan key:generate
```

4. Membuat migration Database

```bash
php artisan migrate
```

5. Membuat data user di Database menggunakan Seeder

```bash
php artisan db:seed
```

6. Membuat storage
```bash
php artisan storage:link
```

6. Buka phpmyadmin lalu cari table users. Disitu terdapat 10 data user yang tadi dibuat oleh Seeder dengan password default 12345
7. Aplikasi siap untuk digunakan


## Authors

- [@febryars33](https://www.github.com/febryars33)

