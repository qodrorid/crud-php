# CATATAN PERTEMUAN 2
Berlangsung pada 21 Maret 2017

## Setter & Getter (Encapsulation)
> `property` tidak boleh langsung diakses, harus dibuat getter & setter.
- gunanya juga adalah untuk memanipulasi (semisal validasi) sebelum property dipanggil.
- contoh: `getHarga()` dan `setHarga()`.
- Jangan gunakan `public property` agar tidak bisa langsung diakses tetapi gunakan `protected` untuk `parent class` dan `private` untuk `child class`.

## Constant
> Digunakan untuk menyimpan value yg tidak bisa diganti.
- penulisannya harus dengan huruf besar.
- define [NAMA] = "nilai"  : `define` untuk native php.
- const [NAMA] = "nilai"  : `const` untuk oop php.
- diakses menggunakan `self::NAMA_CONST`.
- Predefined Constant: constant bawaan PHP, semisal `PHP_VERSION`

## Constructor
> Method yang pertama kali dipanggil dari suatu class- tidak boleh mendefinisikan nilai property secara langsung tetapi didalam method `__construct()`
- boleh menambahkan parameter di dalam `__construct()`.
- jangan menyingkat penamaam variabel, akan membuat bingung.
- di dalam method jangan gunakan `echo` tetapi gunakan `return`

### Tugas
- Tugas mencakup seluruh materi yang telah dipelajari pada pertemuan ini.
- Membuat project untuk menghitung rumus matematika.
- Masing-masing santri membuat 3 rumus.