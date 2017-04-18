<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // protected $table = "users";
    // protected $hidden = ['gender'];
    protected $fillable = ['name', 'gender', 'email', 'address'];

    public function getDataByGender($gender = "Female")
    {
        return self::whereGender($gender)->get();
    }
}
