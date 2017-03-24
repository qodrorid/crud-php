# CATATAN PERTEMUAN 4
Berlangsung pada 24 Maret 2017, 13.30 - 14.30 WIB @ [QODR HQ](https://goo.gl/maps/xMVQtcLw5ry)

## Static Property & Static Method
> property dan method yang melekat pada `class` bukan kepada objek.
- cara penulisannya ditambahkan keyword `static`.
- mengakses `static method` tidak diperlukan keyword `new` tetapi langsung menggunakan `::` diikuti nama `method`.
- mengakses `static property` menggunakan `::` diikuti `$namaProperty`.
- mengakses `static method` dalam satu `class` menggunakan `self::namaStaticMethod` atau `static::namaStaticMethod`.

## Magic Method
> fungsi-fungsi khusus yang dimiliki PHP secara buid-in (sudah ada sebelumnya)
- semisal `construct()`, `__call()`, `__get()`, `__set()` dll.
- `__call()` : berfungsi untuk memanggil method yang tidak ada disebuah class atau fungsi tsb tidak untuk public.
- `__callStatic()` : sama dengan `__call()` hanya saja pemanggilannya secara `static`.
- `__set()` dan `__get()` : mengeset atau mengambil property yg tidak dimiliki oleh sebuah `class`.
- `__toString()` : menampilkan atau menjalankan perintah ketika menjalankan sebuah perintah `echo` atau `print` pada saat menginisialisasi sebuah object.

## Tugas
- Tidak ada tugas.