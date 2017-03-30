# CATATAN PERTEMUAN 7-8
Berlangsung pada :
1. 28 Maret 2017, 08.10 - 09.30 WIB @ [QODR HQ](https://goo.gl/maps/xMVQtcLw5ry)
2. 30 Maret 2017, 07.00 - 09.00 WIB @ [QODR HQ](https://goo.gl/maps/xMVQtcLw5ry)

## Composer
> Memanejemen library yang digunakan atau disebut juga `dependency manager`.
- Membuat codingan lebih rapi dan terstruktur.
- Autoload: untuk me-`load` otomatis file atau library.
- Buka terminal - ketikkan `composer init` untuk membuat konfirurasi `composer.json`.
- Untuk membuat dependency project ketikan diterminal `composer install -vvv --profile`.
- Untuk menginstall package/library, buka dokumentasinya kemudian copas di file `composer.json` dibagian `require: {}`, kemudian diterminal ketikan `composer update` atau dapat langsung diterminal dengan mengetikan `composer require namaPackage`.
- Langkah awal menggunakan package dengan cara me-`load` `autoload.php` didalam folder `vendor`.
- Cek dokumentasi package untuk detail penggunaan. semisal `use Carbon\Carbon`.
- Kumpulan repository php dapat ditemukan di [Packagist](https://packagist.org/).
- Mendaftarkan folder (berisi kumpulan class) agar terload otomatis dengan standar `psr-4` dengan cara mengedit file `composer.json` :
  ```json
  "autoload": {
      "psr-4": {
          "namaNameSpace\\": "namaFolder/"          
      }
  }
  ```
- Hasil dari `generate autoload` dapat dilihat di `vendor/composer/autoload_psr4.php`.
- Mengakses class yang satu `namespace` tidak perlu di `use`.

### Tugas
- Membuat aplikasi rumus (seperti sebelumnya) menggunakan namespace `Rumus`.
- Setiap method harus menggunakan `method chaining`.
  ```php
  Rumus::getKerucut()->setTinggi(10)->show();
  Rumus::getBalok()->setTinggi(10)->setLebar()->setPanjang()->show();
  ```
- Jika property tidak ada, harus ada nilai `default`.
- Menggunakan `autoload psr-4` dengan `composer`.