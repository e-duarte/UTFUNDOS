<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Investidor extends Model
{
    protected $table = "INVESTIDOR";

    public function investimento()
    {
        return $this->hasMany('App\Models\Investimento');
    }

    public function addInvestimento(Investimento $investimento){
        $this->investimento->save($investimento);
    }

    public function showInvestimentos(){
        return Investidor::all();
    }

    //Retorna o saldo total do investidor, isto é a soma de todas os investimento e seus rendimentos
    public function showSaldo(){
        $investimentos = $this->showInvestimentos();

        foreach($investimentos as $investimento){
            
        }
    }
}
