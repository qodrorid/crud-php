<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller  {

    public function index() 
    {
        echo "Ini halaman home";
    }

    public function profile($id, $nama)
    {
        echo $id;
        echo $nama;
    }

    public function input()
    {
        $data = "Mas Taufan from Way Kambas";
        
        // return view('home.input', ['data' => $data]);
        // return view('home.input')->with(['data' => $data]);
        return view('home.input', compact('data'));
    }
    
}