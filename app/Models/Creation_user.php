<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creation_user extends Model
{
    use HasFactory;
    protected  $table = 'ucr_creation_users';
    protected $fillable = [
        'ucr_creation_id',
        'ucr_user_id',
    ];



    public function creators(){
        return $this->belongsTo(User::class, 'ucr_user_id', 'id');
    }

    public function creates(){
        return $this->belongsTo(Creation::class, 'ucr_creation_id');
    }
}
