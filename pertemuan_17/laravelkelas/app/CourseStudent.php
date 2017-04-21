<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourseStudent extends Model
{
    protected $fillable = ['course_id', 'student_id'];

    protected $table = 'course_student';
}
