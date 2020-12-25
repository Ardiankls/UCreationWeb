<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'ucr_creations';

    protected $fillable = [
       'name'

    ];

    public function course(){
        return $this->belongsTo(Department::class, 'department', 'id');
    }

}
