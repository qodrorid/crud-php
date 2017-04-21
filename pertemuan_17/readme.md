# CATATAN PERTEMUAN 17
Berlangsung pada 21 April 2017, 13.30 - 15.00 WIB @ [QODR HQ](https://goo.gl/maps/xMVQtcLw5ry)

## CRUD LARAVEL (LANJUTAN)
> Praktek lanjutan membuat CRUD sederhana menggunakan Laravel.

### Implementasi Relasi One to One
- Buat method `teacher()` di model `Classroom`
  ```php
    public function teacher()
    {
        return $this->belongsTo('App\Teacher', 'teacher_id');
    }
  ```
- Buat method `classroom()` di model `Teacher`
  ```php
    public function classroom()
    {
        return $this->hasOne('App\Classroom', 'teacher_id');
    }
  ```
- Inisialisasi model Classroom lalu tes di method `index()`
  ```php
  return $this->classroom->with('teacher')->get();
  ```
- Untuk melihat query sql gunakan method `toSql()` 
  ```php
  return $this->classroom->with('teacher')->toSql();
  ```
### Implementasi Relasi Many to Many
- Buat migration courses
- Buat migration courses_student, sebagai pivot table (tabel penghubung courses dan students)
- Pada model `Student` tambahkan method `courses()` untuk menghubungkan dengan model `Course`.
  ```php
    public function courses()
    {
        return $this->belongsToMany('App\Course');
    }
  ```
- Buat model Course, lalu buat method `students()`
  ```php
    public function students()
    {
        return $this->belongsToMany('App\Student');
    }
  ```
  *ket: property `$guarded` mendefiniskan field yang gak boleh diinput (kebalikan dari `$fillable`)
- Buat seeder untuk tabel course
- Buat seeder untuk tabel course student
- Pada `DatabaseSeeder`, tambah tabel course & course_student di $tables lalu panggil class `CourseTableSeeder` & `CourseStudentsTableSeeder`
- Buat model untuk course student
- Tes model `Course` untuk mengambil semua data di method `index()`
  ```php
  return \App\Course::with('students')->get();
  ```
- Tes model `Course` untuk mengambil satu data di method `index()`
  ```php
  return \App\Course::find(1)->students()->get();
  ```