<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Authenticatable;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable  as AuthenticatableContract;
use Tymon\JWTAuth\Contracts\JWTSubject;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Driver extends Eloquent implements JWTSubject, AuthenticatableContract
{

    use Notifiable;
    use Authenticatable;
    
    protected $connection = 'mongodb';
    protected $collection = 'users';


    protected $fillable = [
        'name', 'last_name', 'phone', 'email', 'password', 'status', 'photo', 'address', 'role', 'driver', 'enterprise_id',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function enterprise(){
        return $this->belongsTo('App\Enterprise',  'enterprise_id', '_id');
    }

    public function getJWTIdentifier()
    {
        return $this->getKey();
    }
    public function getJWTCustomClaims()
    {
        return [];
    }

}
