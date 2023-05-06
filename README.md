# Kita Pintar

Kita pintar adalah sebuah forum berbasis laravel dan mysql dimana user bisa bertanya dan mengajukan pertanyaan serta bisa menjawab pertanyaan.

## Nama Kelompok:
1. asdasdas
2. asdasdhas
3. adasdasd
4. asdasd
5. asdasd

## Link video:

#### Fitur aplikasi.
- Login Register mengunakan Laravel Fortify
- Dashboard Admin (hak hapus postingan, hak edit postingan user, menambahkan tags dan kategori).
- Dashboard User  (Menganti photo profile).

#### Aplikasi ini mengunakan beberapa library sebagai berikut
- Blade Ui Kit.
- Fortify.
- CK editor

## Instalasi

Pertama

```bash
php artisan config:clear
```
Instalasi Blade ui Kit

```bash
composer require blade-ui-kit/blade-ui-kit
```

Instalasi blade hero icon

```bash
composer require blade-ui-kit/blade-heroicons
```

Instalasi zond icons

```bash
composer require blade-ui-kit/blade-zondicons
```
lalu

```bash
php artisan vendor:publish --tag=blade-heroicons-config
```


Instalasi laravel

```bash
composer install
```
lalu config file SVG path untuk semua depency UI

```
create file:
resource/svg
```

Setelah itu generate link publik

```
php artisan storage:link
```

migrate database 

```
php artisan migrate:fresh --seed
```

Lalu jalankan aplikasi
```
php artisan serve
```
