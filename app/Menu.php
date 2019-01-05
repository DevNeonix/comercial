<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ["menu", "empresa_id"];
    public function submenus(){
        return $this->hasMany(Submenu::class);
    }
}
