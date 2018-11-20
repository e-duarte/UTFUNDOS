<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Util\Util;

class Teste extends Controller
{
    public function index(){
        $time = strtotime("01-08-2018");
        return date("Y-m",$time);
    }

    public function verificar(Request $request){
        $date1 = $request->input("date1");
        $date2 = $request->input("date2");

        return Util::data_diff_mes($date1, $date2);
    }
}
