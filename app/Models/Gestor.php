<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gestor extends Model
{
    protected $table = "APLICACAO";

    public function aplicacao(){
        return $this->hasMany('App\Models\Aplicacao');
    }
}
