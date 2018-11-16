<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Acao;

class AcaoController extends Controller {
    public function index(){

    }

    public function store(Request $request){
        $acao = new Acao;
        $acao->descricao = "Acao Teste";
        $acao->save();
    }
}
