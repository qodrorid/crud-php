<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['title'];

    protected $guarded = [];

    protected $table = 'courses';

    public function students()
    {
        return $this->belongsToMany('App\Student');
    }
}
