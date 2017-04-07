# CATATAN PERTEMUAN 12
Berlangsung pada 07 April 2017, 13.30 - 15.00 WIB @ [QODR HQ](https://goo.gl/maps/xMVQtcLw5ry)

## Blade Templating
> Template engine yang sudah disediakan Laravel.
- Penamaan file harus diikuti `.blade.php`.
- Buat file `default.blade.php` yang akan dijadikan sebagai `root` template.  
- tambahkan `@yield('')` untuk 
- Gunakan `_` diikuti namafile untuk file template di folder partials.
- Dokumentasi lebih lanjut [blade template](https://laravel.com/docs/5.4/blade).

## Migration
> Merupakan version control untuk database.
- Setting database di file `.env` dan buat database baru.
- Buka terminal lalu inputkan : `php artisan make:migration create_students_table --create=students`
- tambahan `--create=students` agar otomatis terbuat tabel `students` di migration-nya.
- File yang digenerate dapat ditemukan di folder `database/migrations`
- Pada method `up()` tambahkan:
  ```php
  Schema::create('students', function (Blueprint $table) {
    $table->increments('id');
    $table->string('name')->nullable();
    $table->string('email')->nullable();
    $table->enum('gender', ['Male', 'Female'])->default('Male');
    $table->text('address')->nullable();
    $table->timestamps();
  });
  ```
- Untuk mengedit column yang tidak dibutuhkan gunakan `php artisan migrate:refresh`.
- Dokumentasi lebih lanjut [migrations](https://laravel.com/docs/5.4/migrations)

## Seeding
> Merupakan tes dummy data untuk database.
- ketikan diterminal `php artisan make:seeder StudentsTableSeeder`
- File yang digenerate dapat ditemukan di folder `database/seeds`
- Gunakan `Faker` untuk membuat dummy data.
- Pada method `run()` tambahkan:
  ```php
  $faker = Faker::create('id_ID');
  $gender = ['Male', 'Female'];

  foreach (range(1, 28) as $index) {
      DB::table('students')->insert([
          'name' => $faker->name,
          'email' => $faker->email,
          'gender' => $faker->randomElement($gender),
          'address' => $faker->address
      ]);
  }
  ```
- Daftarkan class `StudentsTableSeeder` pada method `run()` `DatabaseSeeder.php`
  ```php
  $this->call(StudentsTableSeeder::class);
  ```
- Jika ingin me-refresh kemudian di-seed otomatis, inputkan `php artisan migrate:refresh --seed`

### Tugas
- Buat tabel `students`, `teachers` dan `schools` lewat `migration` & `seeder`.
- Dihalaman Home tampilkan total guru, total murid dam sekolah.
- Dihalaman Students tampilkan list murid, jika diklik tampil detailnya.
- Dihalaman Teachers tampilkan list guru, jika diklik tampil detailnya.
- Dihalaman Schools tampilkan list sekolah, jika diklik tampil detailnya.
  
