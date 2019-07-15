<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class terceros extends Model
{
    protected $fillable = [
        'cedula','nombres','apellidos','contacto'
    ];
    protected $guarded= [];
    protected $hidden = [];
}
