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
        return $this->hasMany(Lecturer::class);
    }
    public function staff(){
        return $this->hasMany(Staff::class);
    }


}
