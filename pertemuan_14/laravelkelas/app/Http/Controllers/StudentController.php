<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
use App\Student;

class StudentController extends Controller
{
    protected $student;

    public function __construct(Student $student)
    {
        $this->student = $student;
    }

    public function index()
    {
        
    }

    public function create()
    {
        return view('student.create');
    }

    public function store(StudentRequest $request)
    {
        if (! $this->student->create($request->all())) {
            return redirect()->back()->with('error_message', 'Something went wrong');
        }

        return redirect()->back()->with('success_message', 'Student created successfully');
    }    

}
