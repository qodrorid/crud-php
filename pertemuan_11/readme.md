# CATATAN PERTEMUAN 11
Berlangsung pada 06 April 2017, 07.20 - 09.00 WIB @ [QODR HQ](https://goo.gl/maps/xMVQtcLw5ry)

## Pengenalan Laravel
- Folder `app` => Proses logic dan bisnis.
- Folder `resources` => Tampilan atau view yang masih diproses.
- Folder `routes` => Mengatur alur bisnis.
- Folder `public` => Tampilan atau view yang sudah siap digunakan.

## Konsep MVC pada Laravel
- MVC singkatan dari `Model View Controller`
  - Model : Mengolah data ke `database`
  - Controller : Jembatan antara `model` dan `view`
  - View : Menampilkan data dari `database` atau `bisnis logic`.
  
## Praktek
- Jalankan server untuk development di terminal: `php artisan serve`.
- Membuat basic `routing` pada `routes/file web.php` dengan `closure`.
  ```php
  Route::get('tes', function() {
      echo "Ini halaman tes.";
  });
  ```
- Membuat basic `routing` dengan `controller`.
  ```php
  Route::get('login', 'LoginController@index');
  ```
- Membuat LoginController` manual di `app/Http/Controllers`.
- Men-generate controller dari terminal: `php artisan make:controller HomeController`.
- Membuat `routing` dengan `parameter array` dengan `HomeController`.
  ```php
  Route::get('home', ['uses' => 'HomeController@index', 'as' => 'home.index']);
  ```
  - lebih direkomendasikan menggunakan ini karena lebih powerfull.
  - `uses` : digunakan untuk memilih method-nya
  - `as` : digunakan untuk menentukan nama / alias dari route tsb.
- Membuat `routing` yang dapat menangkap parameter dengan menambahkan `/{variabel}`.
  ```php
  Route::get('home/{id}', ['uses' => 'HomeController@profile', 'as' => 'home.profile']);
  ```
- Menampilkan `view` dari `controller`
  - Pada method `input` tambahkan `return view('namaFolder.namaFile')`;
  - Buat file baru pada `resources/home/input.blade.php`. (nama file wajib diikuti `.blade`)
  - Mengirim data dari controller ke view dengan bentuk array.
    ```php
    $data = "lorem ipsum";

    // ada 3 opsi (array, compact dan with)

    return view('home.input', ['data' => $data]);
    return view('home.input', compact('data'));
    return view('home.input')->with(['data' => $data]);
    ```
  - Mengakses `data` dari `view` dengan menambahkan `{{ $data }}`.

### Tugas
- Membuat 3 halaman statis : 
  - Home
  - Profile => list data
  - Detail Profile (dengan parameter)