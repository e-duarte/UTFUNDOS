<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Acao extends Model {
    protected $table = "ACAO";

    public function aplicacao(){
        return $this->hasMany('App\Models\Historico');
    }
}
