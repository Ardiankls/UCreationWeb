<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    use HasFactory;
    protected $table = 'departments';
    protected $fillable = [
        'initial',
        'name'

    ];

    public function students(){
        return $this->hasMany(Students::class);
    }
    public function lecturers(){
        return $this->hasMany(Lecturers::class);
    }
    public function staff(){
        return $this->hasMany(Staff::class);
    }
    public function courses(){
        return $this->hasMany(Course::class);
    }

}
