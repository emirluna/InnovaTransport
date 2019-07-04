<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Address;

class Route extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'enterprises';

    protected $fillable = [
        'distance',
        'time',
        'money'
    ];

    public function departure_address(){
        return $this -> embedsOne('App\Address');
    }

    public function arrival_address(){
        return $this -> embedsOne('App\Address');
    }


    public function order_address(){
        return $this -> embedsMany('App\Address');
    }

}
