<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    use HasFactory;

    protected $fillable = [
        'initial',
        'title_name',
    ];
    public function lecturer(){
        return $this->hasMany(lecturer::class);
    }
    public function students(){
        return $this->hasMany(Student::class);
    }


}
