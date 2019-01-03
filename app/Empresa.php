<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
protected $fillable=['razon_social',
'ruc',
'propietario',
'telefono',
'direccion'];
}
