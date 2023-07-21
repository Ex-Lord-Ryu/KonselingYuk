# CodeIgniter 4 Application Starter

## server yang dibutuhkan

PHP version 7.4 atau lebih tinggi dan extensions untuk installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Selain itu, pastikan bahwa ekstensi berikut diaktifkan dalam PHP Anda:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

## 

## Instalasi & Update

disini menggunakan framework CodeIgniter 4 versi 4.3.6 dan apanila ada masalah atau pembaruan dari CodeIgniter anda bisa menacri pada documentasi [CodeIgniter 4](https://codeigniter.com/user_guide/index.html)

update composer jika diperlukan.



## Sql, migrate, sedder

sql telah sediakan dan apanila data didalam error maka dapat menggunakan alternatif lain yaitu dengan menggunakan migrate yang telah disediakan

sedder yang berisi data bisa digunakan apabila diperlukan

## Perubahan yang signifikan dengan index.php

'index.php' tidak lagi berada di akar proyek! Ini telah dipindahkan ke dalam folder *publik *,
Meningkatkan keamanan dan pemisahan komponen.

Ini berarti Anda harus mengkonfigurasi server web Anda untuk "menunjuk" ke folder *public* proyek Anda, dan
Bukan untuk proyek root. Praktek yang lebih baik adalah mengkonfigurasi host virtual untuk menunjuk ke sana. Praktek yang buruk adalah menunjuk server web Anda ke akar proyek dan mengharapkan untuk memasukkan *public/...*, sebagai sisanya dari logika Anda dan
Kerangka kerja tersebut diungkapkan.


** Silakan** membaca panduan pengguna untuk penjelasan yang lebih baik tentang bagaimana CI4 bekerja!

## Manajemen repository

Kami menggunakan masalah GitHub, di repositori utama kami, untuk melacak **BUGS** dan melacak paket kerja yang disetujui **DEVELOPMENT**.
Kami menggunakan kami [forum](http://forum.codeigniter.com) untuk memberikan dukungan dan untuk membahas
Fitur yang diminta.

Repository ini adalah "distribusi", yang dibangun oleh script persiapan rilis kami.
Masalah dengan itu dapat dibangkitkan di forum kami, atau sebagai masalah di repositori utama.


