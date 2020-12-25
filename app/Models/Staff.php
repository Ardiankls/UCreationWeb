<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'nip',
        'name',
        'email',
        'description',
        'photo',
        'gender',
        'phone',
        'line_account'
    ];

    public function staff(){
        return $this->belongsTo(Title::class, 'title', 'id');
    }
    public function users(){
        return $this->morphOne('App\Models\User', 'detailable');
    }

}
