# Kita Pintar

Kita pintar adalah sebuah forum berbasis laravel dan mysql dimana user bisa bertanya dan mengajukan pertanyaan serta bisa menjawab pertanyaan.

## Nama Kelompok:
1. Apriliaosa Fani - 2057201005
2. Vikha Handayani - 2057201031
3. Prida Angelina -2057201008
4. Restu Yulia -2057201003
5. Suci Mandasari - 2057201019

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


## Fitur
    Register dan Login auth mengunakan laravel fortify lib dari laravel yang mengatur auth login serta konfirmasi akun mengunakan email smpt dari gmail(limit)

    terdapat 3 role
    1. Admin dpat mengakses dashboard dan menambahkan tag serta kategori dari postingan
    2. Moderator dapat menghapus komentar dan postingan yang tidak pantas.
    3. User dapat mengposting dan mengahpus komentarnya sendiri.

    - fitur yang terdapat di aplikasi ini mengunakan register dan login dari fortify
    - untuk tampilanya kami mengunakan ui-blade-kit dan icon-hero dari lib laravel
      mengunakan ck editor
    - Mengunakan equloment model
    
 ## alur baliknya
    User melakukann registersasi
    User melakukan postingan
    User lain dapat membalas postingan
    User yang menposting dapat menghapus komentar tidak pantas
    Admin dan Moderator dapat menghapus postingan user dan komentar user yang tidak pantas
    Admin dapat menghapus dan menambahkan TAG dan Kategori

## ERD
    Berikut link erdnya
    ```
    https://github.com/kitapintar/kita-pintar-forum/blob/main/erd-forum-kitapintar.png
    ```

# user login

```
Email: admin@kitapintar.com
PASS:  password
ROLE:   super admin

Email: ocha@kitapintar.com
PASS:  password
ROLE:   super admin

Email: vika@kitapintar.com
PASS:  password
ROLE:   moderator

Email: prida@kitapintar.com
PASS:  password
ROLE:   moderator

Email: restu@kitapintar.com
PASS:  password
ROLE:  user-normal

Email: suci@kitapintar.com
PASS:  password
ROLE:   user-normal
```

