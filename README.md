<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Cara Mengambil Repository

-   Download ZIP Repository terlebih dahulu
-   Extract Folder
-   Copy file `.env.example` menjadi file `.env`.
-   Lakukan Command

    ```
    composer install
    ```

-   Buka file `.env` lalu sesuaikan database `DB_DATABASE` , `DB_USERNAME`, `DB_PASSWORD` dengan database kalian .
-   Lakukan migration dengan command

    ```
    php artisan migrate
    ```

-   Generate key dengan command

    ```
    php artisan key:generate
    ```

-   Jalankan server dengan command

    ```
    php artisan serve
    ```

-   Tutorial Lengkap ada [disini](https://stackoverflow.com/questions/38602321/cloning-laravel-project-from-github).

Project ini bersifat open-sourced dibuat oleh [Dzakiy Dzakwan](https://github.com/DzakiyDzakwan).
