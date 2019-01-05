<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpcionUsuario extends Model
{
    protected $fillable=["usuario_id","submenu_id"];
    public function submenu()
    {
        return $this->hasMany(Submenu::class, "submenu_id");
    }
}
