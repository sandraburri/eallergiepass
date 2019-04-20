<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Watson\Validating\ValidatingTrait;

class User extends Authenticatable
{
    use Notifiable;
    use ValidatingTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required'
    ];

    protected $with = ['address'];

    public function careProvider()
    {
        return $this->hasOne('App\CareProvider');
    }

    public function affected()
    {
        return $this->hasOne('App\Affected');
    }

    public function address()
    {
        return $this->hasOne('App\Address');
    }
}
