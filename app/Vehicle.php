<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    /**
     * @var string[]
     */
    protected $fillable = [
        'id', 'manufacturer', 'model', 'year','status_id', 'color','image','value'
    ];
}
