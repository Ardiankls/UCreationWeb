<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use  HasApiTokens ,HasFactory, Notifiable;

    protected  $table = 'ucr_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable =  [
        'name',
        'email',
        'password',
        'is_login',
        'detailabe_id',
        'detialable_type',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role() {
        return $this->belongsTo(Role::class,'role_id', 'id');
    }

    public function teaches(){

        return $this->belongsToMany(Course_year::class, 'ucr_course_year_lecturers', 'ucr_user_id',
            'ucr_course_year_id');

    }

    public function detailable() {
        return $this->morphTo();
    }

    public function isAdmin()
    {
        if ($this->role->name == 'Admin' && $this->is_login == 1) {
            return true;
        }
        return false;
    }
    public function isLecturer()
    {
        if ($this->role->name == 'Lecturer' && $this->is_login == 1) {
            return true;
        }
        return false;
    }
    public function isStaff()
    {
        if ($this->role->name == 'Staff' && $this->is_login == 1) {
            return true;
        }
        return false;
    }
    public function isStudent()
    {
        if ($this->role->name == 'Student' && $this->is_login == 1) {
            return true;
        }
        return false;
    }
}
