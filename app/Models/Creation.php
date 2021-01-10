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
        'creator_team',
        'status',
        'ucr_course_year_lecturer_id'
    ];

    public function creates(){
        return $this->belongsToMany(Student::class)->withPivot('created')->withTimestamps();
    }
}
