<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creation_student extends Model
{
    use HasFactory;
    protected  $table = 'ucr_creation_students';
    protected $fillable = [
        'ucr_creation_id',
        'student_id',
        'description',
        'status'
    ];
}
