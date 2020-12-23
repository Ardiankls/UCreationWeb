<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jaka extends Model
{
    use HasFactory;
    protected $fillable = [
        'initial',
        'title_name'
    ];
    public function jaka(){
        return $this->hasMany(lecturer::class);
    }
}
