<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;


class Record extends Authenticatable
{

    protected $fillable = [
        'date','name','price', 'description', 'etc',
    ];


}
