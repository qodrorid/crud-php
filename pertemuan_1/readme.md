# CATATAN PERTEMUAN 1
Berlangsung pada 20 Maret 2017

- Pengertian OOP
- Keuntungan OOP
- Bahasa yang memakai konsep OOP
- Pengertian `class`
- Penulisan nama `class`
  - Jangan memakai spasi
  - Hindari menggunakan angka diawal
  - Hindari penamaan `class` yang sama dalam satu project
  - Menggunakan `CamelCase`, contoh: `HomeController`
- Praktek Coding
  - Penulisan `<?php` di line 1, jangan dienter atau dibaris 2 dan tidak perlu ditutup.
  - Mulai menulis syntax php di line 3
  - Penulisan bracket `{}`, contoh:
    ```php
    class Mobil {

    }`
    ```
  - Buat file `Kucing.php` dan `class Kucing {}`
  - Pengenalan `method` atau `function` di dalam `class`
  - Inisialisasi object Kucing di file `index.php`
  - Pengenalan property (variabel diluar method)
    - `public` : bisa dipanggil diluar class dan dapat diwarisi
    - `protected` : tidak bisa dipanggil diluar class
    - `private` : hanya bisa diclass nya sendiri & tidak bisa diwarisi
- Buat file & `class IbuKucing`
- Wariskan `class IbuKucing` ke `class Kucing` dengan menggunakan `extends`
- Akses method dari `class IbuKucing` didalam method dari `class Kucing`

## TUGAS
Membuat project dari materi yang sudah dipelajari semisal antara Guru & Murid.
