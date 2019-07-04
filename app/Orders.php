<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Address;
class Orders extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'enterprises';

    protected $fillable = [
        'type_order',
        'weight',
        'volume',
        'description',
        'frigile',
        'date_assignation',
        'date_order',
        'date_delivery',
        'evidence',
        'status'
    ];


    public function loading_address(){
        return $this -> embedsMany('App\Address');
    }

    public function unloading_address(){
        return $this -> embedsMany('App\Address');
    }
}
