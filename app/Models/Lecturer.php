<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lecturer extends Model
{
    use HasFactory;

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
    public function lecturer(){
        return $this->belongsTo(lecturer::class, 'title', 'id');
    }

}
