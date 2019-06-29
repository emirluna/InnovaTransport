<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Gps;

class Vehicle extends Eloquent
{

    protected $connection = 'mongodb';
    protected $collection = 'enterprises';

  

    protected $fillable = [
        'vin','brand', 'model', 'color','fuel_type',
        'fuel_performance',
        'spare_wheel',
        'axix',
        'vehicle_type',
        'weight_capacity',
        'status'
    ];


    public function gps() {
        return $this -> embedsOne('App\Gps');
    }


}
