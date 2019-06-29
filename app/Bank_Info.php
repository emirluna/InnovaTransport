<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Bank_Info extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'users';


    protected $fillable = [
        'bank',
        'number_account',
        'clabe',
        'currency',
    ];
}
