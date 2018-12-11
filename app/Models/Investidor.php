<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Investidor extends Model
{
    protected $table = "INVESTIDOR";

    //Relaciona Investidor com o investimento, uma relação de um para muitos
    public function investimento(){
        return $this->hasMany('App\Models\Investimento');
    }

    //Aplica um investimento com base no dados do depósito realizado 
    public function addInvestimento(Investimento $investimento){
        $this->investimento->save($investimento);  
    }

    //Retorna todoas os investimentos do investidor
    public function showInvestimentos(){
        return Investidor::all();
    }

    //Retorna o saldo total do investidor, isto é a soma de todas os investimento e seus rendimentos
    public function showSaldo(){
        $investimentos = $this->showInvestimentos();

        foreach($investimentos as $investimento){
            $investimentos += $investimento->valorAtual();
        }
    }

    //remove um investimento pelo seu id
    public function sacar($ids){
        for($i = 0; $i < $ids; $i++){
            $investimento = App\Models\Investimento::find($id[$i]);
            $investimento->delete();
        }
    }

}
