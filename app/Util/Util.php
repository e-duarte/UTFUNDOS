<?php
    namespace App\Util;

    use Faker\Provider\ka_GE\DateTime;

    class Util{

        //Retorna a diferença em mês entres duas datas
        public static function data_diff_mes($dataInicial, $dataFinal){

            $diff = abs(strtotime($dataFinal) - strtotime($dataInicial)/86400);

            $meses = $diff;
            return $meses;
        }

    }

?>