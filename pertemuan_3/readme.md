# CATATAN PERTEMUAN 3
Berlangsung pada 23 Maret 2017

## Chaining Method
> Mengikat atau merantai method, disebut juga mutator. 
- dapat mengubah `property` dari suatu `object`.
- intinya adalah dengan cara me-`return` dirinya sendiri dengan `$this`.
- jika `method` akhir maka tidak perlu di `return $this` tetapi langsung di `echo`.

## Autoloading
> Mengambil sebuah class dari file lain tanpa menggunakan fungsi `include` atau `require`
- menggunakan `spl_autoload_register()`

## Traits
> Mempermudah menggunakan ulang kode dalam sebuah `class`
- dapat mengcopy `method` dari `class` lain.
- penamaan filenya (sebaiknya) diawali dengan nama `Trait`.
- pembuatannya diawali dengan `trait TraitNama {}`, sama dengan nama filenya.
- menggunakan `use TraitNama` didalam sebuah `class`.

### Tugas
- Tugas mencakup seluruh materi yang telah dipelajari pada pertemuan ini.
- Membuat project untuk menghitung rumus matematika.
- Masing-masing santri membuat 3 rumus.