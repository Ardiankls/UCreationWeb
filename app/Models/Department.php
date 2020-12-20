<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    use HasFactory;
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

}
