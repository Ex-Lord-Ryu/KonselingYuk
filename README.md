# CodeIgniter 4 Application Starter

## Pastikan Prasyarat Terpenuhi:

PHP version 7.4 atau lebih tinggi dan extensions untuk installed:

- [intl](http://php.net/manual/en/intl.requirements.php)
- [mbstring](http://php.net/manual/en/mbstring.installation.php)

Selain itu, pastikan bahwa ekstensi berikut diaktifkan dalam PHP Anda:

- json (enabled by default - don't turn it off)
- [mysqlnd](http://php.net/manual/en/mysqlnd.install.php) if you plan to use MySQL
- [libcurl](http://php.net/manual/en/curl.requirements.php) if you plan to use the HTTP\CURLRequest library

## Pastikan Prasyarat Terpenuhi:

Pastikan Anda telah menginstal server web (seperti Apache) dan PHP di komputer Anda.
Pastikan telah menginstal Git di komputer Anda untuk mengkloning repositori.

## Pilih Direktori Tujuan:

Pilih direktori di mana Anda ingin menyimpan proyek CodeIgniter 4 ini. Misalnya, jika Anda ingin menyimpannya di direktori "htdocs" di XAMPP, Anda dapat masuk ke direktori tersebut melalui terminal atau command prompt.
## Klone Repositori:

Ketik perintah berikut untuk mengkloning repositori KonselingYuk ke direktori tujuan:
bash
Copy code
git clone https://github.com/Ex-Lord-Ryu/KonselingYuk.git
## Masuk ke Direktori Proyek:

Pindah ke direktori proyek yang telah Anda kloning:
bash
Copy code
cd KonselingYuk
## Instal Dependensi:

CodeIgniter 4 menggunakan Composer untuk mengelola dependensi. Pastikan Anda telah menginstal Composer di komputer Anda.
Jalankan perintah berikut untuk menginstal dependensi proyek:
Copy code
composer install
## Konfigurasi .env:

Duplikat file .env.example menjadi .env.
Sesuaikan pengaturan database (DB) Anda dengan mengisi informasi yang diperlukan di file .env.
Jalankan Migrasi:

CodeIgniter 4 menggunakan fitur migrasi untuk mengatur skema database. Jalankan perintah migrasi berikut untuk membuat tabel yang diperlukan di database:
Copy code
php spark migrate
## Jalankan Development Server:

CodeIgniter 4 menyediakan server pengembangan bawaan untuk memudahkan pengembangan.
Jalankan perintah berikut untuk menjalankan server pengembangan:
Copy code
php spark serve
## Buka Aplikasi di Browser:

Buka browser web Anda dan akses http://localhost:8080/ (atau sesuai dengan port yang Anda tetapkan saat menjalankan server pengembangan).
Selesai:

Sekarang Anda telah berhasil menginstal proyek CodeIgniter 4 dari repositori KonselingYuk. Anda dapat mulai mengembangkan aplikasi Anda menggunakan proyek ini.
