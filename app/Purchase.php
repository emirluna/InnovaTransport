<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Purchase extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'enterprises';

    protected $fillable = [
    'type_package',
    'number_units',
    'unit_price',
    'total_price',
    'action',
    'purchase_date',
     'activation_date',
     'expiration_date',
     'status_service',
     'status_payment'
    ];
}
