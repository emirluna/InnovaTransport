<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Suscription extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'enterprises';

    protected $fillable = [
        'type_suscription',
        'units_hired',
        'units_active', 
        'units_available',
        'units_assigned',
        'status'
    ];
}
