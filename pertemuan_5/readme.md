# CATATAN PERTEMUAN 5
Berlangsung pada 25 Maret 2017, 07.45 - 09.00 WIB @ [QODR HQ](https://goo.gl/maps/xMVQtcLw5ry)

## Namespace
> Memudahkan identifikasi dan mengelompokkan kode.
- semisal mengelompokkan object yang berbeda dengan nama class dan method yg sama.
- menggunakan keyword `namespace` yang ditempatkan dibawah tag `<?php`.
- saat menginisialisasi menggunakan `new \namaNamaspace\namaClass()`.
- menggunakan keyword `use` untuk memanggil namespace sebelum diinisialisasi.
- untuk membedakan class ketika di `use` gunakan `alias` menggunakan keyword `as`.
- namespace yang di `alias` ketika diinisialisasi menggunakan `new namaAlias()`.

## Abstract
> digunakan didalam inheritance (pewarisan class) untuk memaksakan implementasi method yang sama bagi seluruh `class` yang diturunkan dari `abstract class`.
- menggunakan keyword `abstract` diikuti nama `class` atau `method`.
- `asbtract class` tidak bisa diinisialisasi tetapi hanya diturunkan.
- `abstract class` juga dapat diisi dengan method biasa tidak harus `abstract method`.
- `abstract method` tidak perlu dibuat isi methodnya, tetapi hanya signature (nama method & parameternya).
- `abstract method` hanya bisa dibuat didalam `abstract class`.

### Tugas
- Refactor (perbaharui) tugas sebelumnya menggunakan konsep `namespace` & `abstract`.