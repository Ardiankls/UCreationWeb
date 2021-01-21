<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'staff';
    protected $fillable = [
        'nip',
        'name',
        'email',
        'description',
        'photo',
        'gender',
        'phone',
        'line_account',
        'department_id',
        'title_id'
    ];




    public function staff(){
        return $this->belongsTo(Title::class, 'title', 'id');
    }
    public function user(){
        return $this->morphMany('App\Models\User', 'detailable');
    }
    public function department(){
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }
    public function title(){
        return $this->belongsTo(Title::class, 'title_id', 'id');
    }


}
