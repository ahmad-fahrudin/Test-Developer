<p align="center">Dibuat Menggunakan Framework Laravel Versi 10 dan Php versi 8.1.</p>


## Install

1. **Clone Repository**

```bash
git clone https://github.com/ahmad-fahrudin/test-developer.git
cd test-developer
composer install
cp .env.example .env
```


2. **Buka `.env` lalu ubah baris berikut sesuai dengan databasemu yang ingin dipakai**

```bash
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

3. **import `test developer.postman_collection` ke Postman**


4. **Instalasi Aplikasi**

```bash
php artisan key:generate
php artisan migrate --seed
```

5. **Jalankan Aplikasi**

```bash
php artisan serve
```


## Preview

![Screenshot 2024-08-07 091943](https://github.com/user-attachments/assets/3c98460d-82ca-42e4-8aa2-37b48ccd9049)

![Screenshot 2024-08-07 091954](https://github.com/user-attachments/assets/0b1f9b48-c0c3-456e-9240-67a3c0b28415)

![Screenshot 2024-08-07 092008](https://github.com/user-attachments/assets/9a0c0146-7b82-45a2-a07e-1ad148a27bef)

![Screenshot 2024-08-07 092034](https://github.com/user-attachments/assets/705c7636-cf7f-4fd4-af55-26e39266ff65)


