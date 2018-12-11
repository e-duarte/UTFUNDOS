<?php

namespace App\Models;
use App\Models\Taxa;

use Illuminate\Database\Eloquent\Model;
use Util\Util;
use Carbon\Carbon;
class Investimento extends Model
{
    protected $table = "INVESTIMENTO";

    //Retorna o rendimento atual do investimento
    public function rendimento(){
        $dataAtual = Carbon::now();
        $rendimento = 0;

        if($dataAtual->toDateString() >= $this->data_saque_estimado){
            $diffMounths = $dataAtual->diffInDays($this->data_saque_estimado)/30;

            if($diffMounths < 1){
                $rendimento = aplicarTaxaDia($diffMounths);
            }else if ($diffMounths >= 1 && $diffMounths <= 11){
                $rendimento = aplicarTaxaMes($diffMounths);
            }else if($diffMounths >= 12){
                $rendimento = aplicarTaxaAno($diffMounths*12);
            }
        }

        return $rendimento;
    }

    private function aplicarTaxa($periodo){
        $taxa = $this->taxaMes()/100;
        return $periodo*$taxa*$this->valorInvetido;
    }

    public function valorAtual(){
        return $this->valor_investido + $this->rendimento();
    }
}
