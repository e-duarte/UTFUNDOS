<?php

namespace App\Models;
use App\Models\Taxa;

use Illuminate\Database\Eloquent\Model;
use Util\Util;
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
            $timestampDeposito = strtorime($this->data_deposito);
            if(date("Y-m", $timestampDeposito) == date("Y-m") && Util::get_dias_mes($this->data_deposito) == $this->periodo){
                return $this->valor + rendimentoDias($this->periodo);
            }else{
                return $this->valor;
            }

        }else if($this->tipo_periodo == $MES){

        }else if($this->tipo_periodo == $ANO){

        }
    }

    private function rendimentoDias($periodo){
        return ($periodo/30)*Taxa::lastTaxa()->taxa_mes;
    }

    private function rendimentoMes(){
        return $periodo*Taxa::lastTaxa()->taxa_mes;
    }    
    
    private function rendimentoAnos(){
        return ($periodo*12)*Taxa::lastTaxa()->taxa_mes;
    }
}
