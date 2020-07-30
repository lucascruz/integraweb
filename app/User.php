<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','image','email','password','cel','city','role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function Admin()
    {
        $role = new Role();

        if ($this->role->role_name == 'admin') {
            return true;
        }
        return false;
    }

    public function Patient()
    {
        $role = new Role();

        if ($this->role->role_name == 'patient') {
            return true;
        }
        return false;
    }

    public function Professional()
    {
        $role = new Role();

        if ($this->role->role_name == 'professional') {
            return true;
        }
        return false;
    }
}
