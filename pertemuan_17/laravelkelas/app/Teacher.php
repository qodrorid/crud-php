<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = ['name', 'nip'];

    public function classroom()
    {
        return $this->hasOne('App\Classroom', 'teacher_id');
    }
}
