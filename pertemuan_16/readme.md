# CATATAN PERTEMUAN 16
Berlangsung pada 20 April 2017, 07.40 - 09.00 WIB @ [QODR HQ](https://goo.gl/maps/xMVQtcLw5ry)

## CRUD LARAVEL (LANJUTAN)
> Praktek lanjutan membuat CRUD sederhana menggunakan Laravel.
- Pada`DatabaseSeeder` panggil class seeder di method `run()`.
    ```php
    public function run()
    {
        Model::unguard();

        $this->cleanDatabase();

        $this->call(TeacherTableSeeder::class);
        $this->call(ClassroomTableSeeder::class);
        $this->call(StudentsTableSeeder::class);

        Model::reguard();
    }
    ```
- Buat property `$tables` dan method `cleanDatabase()` untuk mengecek foreign key dan mereset isi tabel.
    ```php
    protected $tables = [
        "teachers",
        "classrooms",
        "students"
    ];    

    public function cleanDatabase()
    {
        DB::statement("SET FOREIGN_KEY_CHECKS=0");

        foreach ($this->tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement("SET FOREIGN_KEY_CHECKS=1");
    }  
    ``` 
- Pada model `Student`, buat method `classroom()` agar terhubung dengan model classroom (one to one).
    ```php
    public function classroom()
    {
        return $this->belongsTo('App\Classroom', 'classroom_id');
    }
    ```
    * ket: parameter(namaModel, namaFieldPenghubung);
- Pada `StudentController` di method `index()` panggil method `classroom()` dari model `Student`.
    ```php
    public function index()
    {
        $students = $this->student->with('classroom')->get();
    }
    ```
- Pada method `index()` coba akses field `grade` dari model `classroom`.
    ```php
    foreach ($students as $student) {
        echo $student->classroom->grade . '<br>';
    }
    ```
- Dokumentasi tentang [eloquent relationships](https://laravel.com/docs/5.4/eloquent-relationships).

### Tugas
- Pelajari tentang `belongsToMany`, `hasMany` dan `hasOne`.
- Buat CRUD `relationship` lewat model penghubung.