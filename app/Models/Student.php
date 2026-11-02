<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'roll_no',
        'name',
        'email',
        'department',
        'semester',
        'cgpa'
    ];
}