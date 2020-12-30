<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_year extends Model
{
    use HasFactory;
    protected $table = 'ucr_course_years';

    protected $fillable = [
        'ucr_year_id', 'ucr_course_id', 'year_id', 'course_id'

    ];
}
