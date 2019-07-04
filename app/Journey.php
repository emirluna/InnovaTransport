<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Route;
use App\Orders;
class Journey extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'enterprises';

    protected $fillable = [
        'type_charge',
        'type_transport',
        'date_creation',
        'date_assignation',
        'satus'
    ];


    public function routes(){
        return $this -> embedsMany('App\Route');
    }

    public function orders(){
        return $this -> embedsMany('App\Orders');
    }

}
