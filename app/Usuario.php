<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable=[
        'nombre',
        'email',
        'clave',
        'nacimiento',
        'documento',
        'image',
        'cargo'
    ];
}
