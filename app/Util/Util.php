<?php
    namespace App\Util;

    use Faker\Provider\ka_GE\DateTime;

    class Util{

        //Retorna a diferença em mês entres duas datas
        public static function data_diff_mes($dataInicial, $dataFinal){
            $dateInicial = date("d/m/Y");
            $dias = abs((strtotime($dataFinal) - strtotime($dataInicial))/86400); // calcular a quantidade de dias

            $meses = $dias/30;
            return floor($meses);
        }

    }

?>