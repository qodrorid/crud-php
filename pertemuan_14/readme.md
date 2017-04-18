# CATATAN PERTEMUAN 14
Berlangsung pada 14 April 2017, 13.30 - 15.00 WIB @ [QODR HQ](https://goo.gl/maps/xMVQtcLw5ry)

## CRUD LARAVEL
> Praktek membuat CRUD sederhana menggunakan Laravel.
- Buat StudentController
- Buat method `__construct()` lalu `inject` model `Student` (lebih lanjut tentang [IOC Container di Laravel](https://medium.com/laravel-indonesia/memahami-ioc-container-di-laravel-f19bec82b22)).
- Buat folder student di views
- Buat routing
- Buat view untuk halaman create
- Buat `request` untuk validasi dengan mengetikan diterminal: `php artisan make:request StudentRequest`.
  - Jangan lupa untuk merubah `return true` pada method `authorize()`
  - Buat validasi didalam method `rules()`.
  - Dokumentasi [Validasi di Laravel](https://laravel.com/docs/5.4/validation)
- Munculkan pesan error validasi di view.
  ```php

  ```
- Buat method `store()` untuk memproses form inputan.
  - untuk merequest otomatis, samakan penamaan inputan dengan nama field di database. 
  - apabila sukses/gagal kehalaman sebelumnya dengan menyertakan `flash_message`.
- Jangan lupa membuat property `$fillable` untuk menyatakan field yang akan diproses.
- Tampilkan `flash_message` di view.

### Tugas
- Tugas CRUD dipertemuan sebelumnya dibuatkan validasi.
- Pesan errornya berbahasa indonesia .
- Hanya menggunakan satu request (switch method).