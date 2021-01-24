<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'student_number', 'firstname', 'lastname',
        'age', 'class_id', 'school_years_id', 'parents'
    ];
}
