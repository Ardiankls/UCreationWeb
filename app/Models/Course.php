<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'ucr_courses';

    protected $fillable = [
       'name','department_id'

    ];



    public function depart(){
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }

    public function years(){
        return $this->belongsToMany(year::class, 'ucr_course_years', 'id','ucr_course_id');
    }
//    public function courseyear(){
//        return $this->hasMany(Course_year::class,'ucr_course_year_id','id');
//    }
//    public function departments(){
//        return $this->belongsTo(Department::class, 'department', 'id');
//    }

}
