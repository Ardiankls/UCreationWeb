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
        'date',
        'description',
        'status'
    ];

    public function creates(){
        return $this->belongsToMany(Student::class)->withPivot('created')->withTimestamps();
    }
}
