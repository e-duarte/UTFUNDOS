<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Util\Util;
use Carbon\Carbon;

class Teste extends Controller
{
    public function index(){
        $time = strtotime("01-08-2018");
        //return Carbon::now()->addDays(31)->toDateString();
        return Carbon::now()->diffInDays(Carbon::now()->addDays(31)->toDateString());
    }

    public function verificar(Request $request){
        $date1 = $request->input("date1");
        $date2 = $request->input("date2");

        return Util::data_diff_mes($date1, $date2);
    }

    
}
