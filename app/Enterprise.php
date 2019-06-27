<?php

namespace App;
use App\Vehicle;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Enterprise extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'enterprises';

  
    protected $fillable = [
        'company_name', 'social_reason','rfc', 'address', 'phone', 'email', 'status', 'suscription', 'purcharses', 'vehicles',

    ];


    public function users(){
        return $this->hasMany('App\User', '_id');
    }

    public function vehicles(){
        return $this->embedsMany('App\Vehicle');
    }

}
