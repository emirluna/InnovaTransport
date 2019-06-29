<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Gps extends Eloquent
{
       
    protected $connection = 'mongodb';
    protected $collection = 'enterprises';

    protected $fillable = [
        'serial_number','brand', 'model', 'ip_address', 'last_latitude', 'last_altitude', 'status'
    ];

  
}
