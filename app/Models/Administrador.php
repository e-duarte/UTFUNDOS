<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administrador extends Model
{
    protected $table = "ADMINISTRADOR";

    public function taxa(){
        return $this->hasMany('App\Models\Taxa');
    }
}
