<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class HomeController extends Controller  {

    private $student;

    public function __construct(Student $student)
    {
        $this->student = $student;
    }

    public function index() 
    {
        // $students = $this->student->all();
        // $students = $this->student->where('gender', 'Female')->get();
        // $students = $this->student->where('gender', 'Female')->orderBy('id', 'desc')->get();
        // $students = $this->student->where('gender', 'Female')->count();
        // $students = $this->student->whereGender('Female')->count();
        // $students = $this->student->whereGender('Female')->paginate(5);
        // $students = $this->student->getDataByGender();
        // $students = $this->student->first();
        $students = $this->student->whereId(3)->first();

        return $students;
        // return view('home.index', ['students' => $students]);
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