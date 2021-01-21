<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creation extends Model
{
    use HasFactory;
    protected  $table = 'ucr_creations';
    protected $fillable = [
        'name',
        'course',
        'date',
        'short_description',
        'long_description',
        'picture',
//        'created_by',
//        'creator_team',
        'status',
        'ucr_course_year_id',
//        'ucr_user_id'
    ];

//    public function creationsof(){
//        return $this->belongsTo(Creation::class, 'ucr_course_year_lecturer_id','id');
//    }
//    public function creations(){
//        return $this->belongsToMany(Creation::class, 'ucr_creation_students', 'ucr_creation_id','student_id');
//    }
    public function creations(){
        return $this->belongsToMany(User::class, 'ucr_creation_users', 'ucr_creation_id','ucr_user_id');
    }
//    public function creators(){
//        return $this->belongsTo(User::class, 'creator_team', 'id');
//    }
    public function creationsof(){
        return $this->belongsTo(Course_year::class,'ucr_course_year_id');
    }

}
