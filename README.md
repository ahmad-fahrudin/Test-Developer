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

![Screenshot 2024-08-07 091943](https://github.com/user-attachments/assets/73695ab1-d84c-443a-af61-1dab956892bd)
![Screenshot 2024-08-07 091954](https://github.com/user-attachments/assets/b0871497-d5ec-43e2-bab8-ea81d00b2db1)
![Screenshot 2024-08-07 092008](https://github.com/user-attachments/assets/502445f7-14e8-47f0-aa49-9d7d21dd50d0)
![Screenshot 2024-08-07 092034](https://github.com/user-attachments/assets/42b55f53-2e9e-4b16-8f2f-da703198dd94)
