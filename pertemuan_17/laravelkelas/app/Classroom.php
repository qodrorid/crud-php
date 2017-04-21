<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = ['teacher_id', 'grade'];

    public function teacher()
    {
        return $this->belongsTo('App\Teacher', 'teacher_id');
    }
}
