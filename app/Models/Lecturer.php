<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    use HasFactory;

    protected $table = 'lecturers';
    protected $fillable = [
        'nip',
        'nidn',
        'name',
        'email',
        'description',
        'photo',
        'gender',
        'phone',
        'line_account'
    ];



    public function department(){
        return $this->belongsTo(Department::class, 'department', 'id');
    }
//    public function lecturer(){
//        return $this->belongsTo(lecturer::class, 'title', 'id');
//    }
    public function jaka(){
        return $this->belongsTo(Jaka::class, 'title', 'id');
    }
    public function title(){
        return $this->belongsTo(Title::class, 'title', 'id');
    }
    public function users(){
        return $this->morphMany('App\Models\User', 'detailable');
    }

}
