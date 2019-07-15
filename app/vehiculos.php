<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehiculos extends Model
{
    protected $fillable = [
        'vin','placa','modelo','año', 'color', 'kilometraje'
    ];
}
