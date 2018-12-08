<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aplicacao extends Model
{
    protected $table = "APLICACAO";

    public function acao(){
        return $this->hasOne('App\Models\Acao');
    }
}
