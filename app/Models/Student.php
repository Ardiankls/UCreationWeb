<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'name',
        'email',
        'batch',
        'description',
        'photo',
        'gender',
        'phone',
        'line_account'
    ];

    public function department(){
        return $this->belongsTo(Department::class, 'department', 'id');
    }

    public function creates(){
        return $this->belongsToMany(Creation::class)->withPivot('created')->withTimestamps();
    }

    public function users(){
        return $this->morphMany('App\User', 'detailable');
    }

}
