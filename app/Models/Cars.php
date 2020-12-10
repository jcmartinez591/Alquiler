<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    protected $guarded=["id"];
    public function Reserva() {
        return $this->hasMany(Reserva::class);
    }
}
