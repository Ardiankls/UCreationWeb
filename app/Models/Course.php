<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'ucr_courses';

    protected $fillable = [
       'name'

    ];



    public function courses(){
        return $this->belongsTo(Department::class, 'department', 'id');
    }

    public function years(){
        return $this->belongsToMany(year::class, 'ucr_course_years', 'id','course_id');
    }

}
