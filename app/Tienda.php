<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tienda extends Model
{
    protected $fillable = ['nombre','calle','numero','colonia','ciudad','estado','codigo_postal','telefono'];
}
