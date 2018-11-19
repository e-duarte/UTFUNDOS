<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Investimento extends Model
{
    protected $table = "INVESTIMENTO";
    public static $DIA = "dia";
    public static $MES = "mes";
    public static $ANO = "ano";
    
    public function post(){
        return $this->belongsTo('App\Post');
    }

    //Retorna o redimento atual do Investimento
    public function valorAtual(){
        if($this->tipo_periodo == $DIA){
            
        }else if($this->tipo_periodo == $MES){

        }else if($this->tipo_periodo == $ANO){

        }
    }

    private function rendimentoMes(){

    }

    private function rendimentoDias(){

    }

    private function rendimentoAnos(){

    }
}
