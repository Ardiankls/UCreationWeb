<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class Course_year extends Model
{
    use HasFactory;
    protected $table = 'ucr_course_years';

    protected $fillable = [
        'ucr_year_id', 'ucr_course_id',

    ];

//    public function lecturer(){
//
//        return $this->belongsToMany(Lecturer::class, 'ucr_course_year_lecturers', 'ucr_course_year_id',
//            'lecturers_id');
//
//    }

    public function lecturers(){
        return $this->hasMany(course_year_lecturer::class,'ucr_course_year_id','id');
    }

    public function lecturer(){

        return $this->belongsToMany(User::class, 'ucr_course_year_lecturers', 'ucr_course_year_id',
            'ucr_user_id');

    }

    public function projects(){
    return $this->hasMany(Creation::class,'ucr_course_year_id','id');
    }

//    public function projects(){
//        return $this->hasManyThrough(course_year_lecturer::class,Creation::class);
//    }
    public function courses(){
        return $this->belongsTo(Course::class, 'ucr_course_id', 'id');
    }

    public function years(){
        return $this->belongsTo(year::class, 'ucr_year_id', 'id');
    }
}
