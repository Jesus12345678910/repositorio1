<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = ['nombre','calle','numero','colonia','ciudad','estado','codigo_postal','telefono','correo','contraseña'];
}
