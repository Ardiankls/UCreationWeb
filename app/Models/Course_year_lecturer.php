<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class course_year_lecturer extends Pivot
{
    use HasFactory;

    protected $table = 'ucr_course_year_lecturers';

    protected $fillable = [
        'ucr_course_year_id', 'ucr_user_id'

    ];

    public function teach(){
        return $this->belongsTo(User::class, 'ucr_user_id', 'id');
    }

    public function lecturer(){
        return $this->belongsTo(Course_year::class, 'ucr_course_year_id');
    }


//    public function teaches(){
//        return $this->belongsToMany(Course_year::class)
//        return $this->belongsToMany(Course_year::class)->withPivot('ucr_course_year_id')->withTimestamps();
//    }

//    public function lect(){
//        return $this->belongsToMany(lecturer::class)->withPivot('lecturer_id')->withTimestamps();
//    }
}
