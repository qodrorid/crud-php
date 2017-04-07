<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller  {

    public function index() 
    {
        $students = ['Taufan', 'Tamvan', 'Banget'];

        return view('home.index', ['students' => $students]);
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