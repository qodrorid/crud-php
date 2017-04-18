# CATATAN PERTEMUAN 13
Berlangsung pada 11 April 2017, 07.30 - 09.00 WIB @ [QODR HQ](https://goo.gl/maps/xMVQtcLw5ry)

## Eloquent Laravel
> ORM (Object Relation Mapping) berguna untuk memudahkan eksekusi database tanpa menggunakan SQL Query.`
- Peraturan:
  - Harus mengextends class `Illuminate\Database\Eloquent\Model`
  - Nama tabel harus `plurals` dari nama modelnya, semisal model `User` maka tablenya `users`.
  - Satu model hanya untuk satu tabel.
- Model baru dibuat didalam folder `app`, dengan cara manual atau lewat terminal `php artisan make:model`
- Gunakan model `Student` dengan cara `use App\Student` pada `HomeController`.
- `inject` model Student didalam method `__construct()` agar dapat diakses secara global oleh method lain.
- Ambil data lewat method `index()` => `$this->student->all()`;
- Ambil data dengan parameter => `$this->student->where('gender', 'Female')->get();`
- Ambil data dengan diurutkan => `$this->student->where('gender', 'Female')->orderBy('id', 'desc')->get();`
- Agar lebih clean dapat menggunakan `whereGender('Female')->count();`
- Membuat paginate `$this->student->whereGender('Female')->paginate(5);`
- Mengganti tabel dengan cara menambah property didalam model Student
  ```php
  protected $table = "namaTabel";
  ```
- Menghilangkan kolom dengan cara menambah property didalam model Student
  ```php
  protected $hidden = "namaTabel";
  ```
- Sebaiknya membuat eloquent di Modelnya bukan di Controller agar tetap `clean`.
  ```php
  public function getDataByGender($gender = "Female")
  {
      return self::whereGender($gender)->get();
  }
  ```
- Panggil method yang telah dibuat `$students = $this->student->getDataByGender();`.
- Mengambil data pertama dalam bentuk obyek `$students = $this->student->first();`.
- Mengambil data dalam bentuk obyek `$students = $this->student->whereId(3)->first();`.

### Tugas
- Membuat CRUD dari tugas sebelumnya.