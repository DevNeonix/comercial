<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submenu extends Model
{
    protected $fillable = ["menu_id", "submenu", "url"];

    public function menu()
    {
        return $this->belongsTo(Menu::class, "menu_id");
    }
}
