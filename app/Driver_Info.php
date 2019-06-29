<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Driver_Info extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'users';


    protected $fillable = [
        'turn',
        'license_number',
        'license_type',
        'expiration_date',
    ];
}
