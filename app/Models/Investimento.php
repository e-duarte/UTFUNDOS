<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Investimento extends Model
{
    protected $table = "INVESTIMENTO";

    public function post(){
        return $this->belongsTo('App\Post');
    }

    //Retorna o redimento atual do Investimento
    public function rendimento(){
        
    }
}
